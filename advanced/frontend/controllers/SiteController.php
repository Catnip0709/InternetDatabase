<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\cookie;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use app\models\test;
use app\models\player;
use app\models\team;
use app\models\competition;
use app\models\coach;
use app\models\court;
use app\models\news;
use app\models\videos;


/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
	public $enableCsrfValidation = false; //禁用CSRF
	public function actionIndex1(){ //主页
	    return $this->renderPartial("index1");
	}
	public function actionShowTeams(){  //teams呈现
	      return $this->renderPartial("teams");
	}
	public function actionShowPlayers(){  //选择所有球员，比赛信息，新闻
		$request=YII::$app->request;
		$nation=$request->get("nation");
	
		$result=player::find()->where(['player_Team'=>"$nation"])->all();
	
		$coach=team::find()->joinwith(['teamCoach'])->select("Team_Coach,Coach_Age")->where(['Team_Nation'=>"$nation"])->asarray()->all();
      
	  
		
		
		$result_match=competition::find()->joinwith(['competitionCourt'])->where("Competition_TeamA=:TeamA or Competition_TeamB=:TeamB",[':TeamA'=>$nation,':TeamB'=>$nation])->orderBy("Competition_Time DESC")->all();
	
		$news=news::find()->all();
	
		
		
		if(count($result_match)<8)
		{
			for($i=count($result_match);$i<8;$i++)  //视图留了8个替换位，如比赛不够八场，相应数据为null，并用jS设置不显示（在前端）
			{
				$result_match[$i]['Competition_Time']='null';
				$result_match[$i]['Competition_TeamA']='null';
				$result_match[$i]['Competition_TeamB']='null';
				$result_match[$i]['Competition_BScore']='null';
				$result_match[$i]['Competition_AScore']='null';
				$result_match[$i]['Competition_Court']='null';
				$result_match[$i]['Competition_CCTV5']='null';
				$result_match[$i]['competitionCourt']['court_Position']='null';
			}
		}
		$data['result']=$result;
		$data['nation']=$nation;
	    $data['result_match']=$result_match;
		$data['coach']=$coach;
		$data['news']=$news;
	
		return $this->renderPartial("players",$data);
	}
	public function actionShowMatches() //呈现所有比赛页面（8页哪个）
	{
	  
	   $result_match=competition::find()->joinwith(['competitionCourt'])->orderBy("Competition_Time")->all();
      $data['result_match']=$result_match;
	 return $this->renderPartial("matches",$data);
	}
   public function actionShowPage()  //处理分页信息，点击一下页数按钮，就会发一个POST请求，根据POST请求的页数，选择相应比赛呈现
   {
	    $request=Yii::$app->request;
		$page=$request->post("page");
	    $result_match=competition::find()->joinwith(['competitionCourt'])->orderBy("Competition_Time")->asarray()->all();
		for($i=0;$i<8;$i++)
		{
			$result_match[$i]=$result_match[($page-1)*8+$i];
		}
	    $data['result_match']=$result_match;
	for($i=0;$i<8;$i++)
	{
		foreach ( $result_match[$i] as $key => $value ) 
		{  
			if(is_array($value))
			{
				foreach($value as $k=>$val)
					$value[$k]=urlencode($val); //数组to json,处理一下中文字符
			}
			else
             $result_match[$i][$key] = urlencode ( $value );   
			
        } 
	}
	   $obj1=urldecode( json_encode($result_match));
	   echo $obj1 ;
	  
   }
	public function actionShowGroup(){   //呈现小组赛的界面（6页哪个）
	    $request=Yii::$app->request;
		$page='A';
	    $result_match=competition::find()->joinwith(['competitionCourt'])->joinwith(['competitionTeamA'])->where("Team_Group=:A",[":A"=>$page])->orderBy("Competition_Time")->asarray()->all();
	    $data['result_match']=$result_match;
		return $this->renderPartial("matches1",$data);
	}
	public function actionShowGroups() //小组赛分页效果的制作，接受前台传来的ajax请求。比如要选择A组所有小组赛阶段比赛，就选择其中一个队伍为A组的所有比赛，按照时间从早到晚排序，取前六场即可
	{
		$request=Yii::$app->request;
		$page=$request->post("page");
		
		switch($page)
		{
			case 1:$page='A';break;
			case 2:$page='B';break;
			case 3:$page='C';break;
			case 4:$page='D';break;
			case 5:$page='E';break;
			case 6:$page='F';break;
			case 7:$page='G';break;
			case 8:$page='H';break;
		}
		$result_match=competition::find()->joinwith(['competitionCourt'])->joinwith(['competitionTeamA'])->where("Team_Group=:A",[":A"=>$page])->orderBy("Competition_Time")->asarray()->all();
			for($i=0;$i<6;$i++)
	{
		foreach ( $result_match[$i] as $key => $value ) 
		{  
			if(is_array($value))
			{
				foreach($value as $k=>$val)
					$value[$k]=urlencode($val);  //数组to json,处理一下中文字符
			}
			else
             $result_match[$i][$key] = urlencode ( $value );   
			
        } 
	}
	   $obj1=urldecode( json_encode($result_match));
	   echo $obj1 ;
	}
	public function actionShowOut()//选出淘汰赛的所有信息（按照时间从大到小的顺序选择16场）
	{
		$result_match=competition::find()->joinwith(['competitionCourt'])->orderBy("Competition_Time DESC")->asarray()->all();
		    $data['result_match']=$result_match;
		return $this->renderPartial("matches2",$data);
	}
//以上是自己写的
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
