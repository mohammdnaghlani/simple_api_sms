<?php 
    $result = null ;
    if(isset($_GET['token'])){
        if(!empty($_GET['token'])){
           if(!isset($_GET['reception']) || empty($_GET['reception']) || !isset($_GET['text_message']) || empty( $_GET['text_message']) ) {
            $result = array(
                'result' => 'false',
                'desctription' => array(
                    'bad requst' => 'Access denaied ! required @param unknwn',
                    'error_number' => 431,
                ),
            ); 
           }else{
            $reception = $_GET['reception'] ;
            $text_mesage = $_GET[ 'text_message'] ;
            $title = isset($_GET['title']) && !empty($_GET['title']) ? $_GET['title'] : 'default title' ;
            $area = isset($_GET[ 'area']) && !empty($_GET[ 'area']) ? $_GET[ 'area'] : '0' ; // all 
            $operator = isset($_GET[ 'operator']) && !empty($_GET[ 'aroperatorea']) ? $_GET[ 'operator'] : 'all' ; // all 
            $send_date = isset($_GET[ 'send_date']) && !empty($_GET[ 'send_date']) ? $_GET[ 'send_date'] : time() ; // current time 
            $result = array(
                'result' => 'true',
                'message_id' => rand(0 , 10000000) ,
                'sender' => array(
                    'user_name'  => 'noghol' ,
                    'first_name' => 'mohammad',
                    'last_name'  => 'naghlani' ,
                    'user_id'    => rand(0,4000) ,
                ),
                'reception' =>array(
                    'phone_number' => $reception,
                    'text'         => $text_mesage,
                    'title'        => $title,
                    'area'         => $area ,
                    'operator'     => $operator,
                    'send_date'    => $send_date ,
                ),
            );
           }
        }else{
            $result = array(
                'result' => 'false',
                'desctription' => array(
                    'bad requst' => 'Access denaied ! token is empty',
                    'error_number' => 451,
                ),
            );            
        }

    }else{

    $result =array(
        'result' => 'false',
        'desctription' => array(
            'bad requst' => 'token not founds !' ,
            'error_number' => 423,
        ),
    );

}
if($result['result'] == 'true'){
    $phone_number = $result['reception']['phone_number'];
    $msg = $phone_number . PHP_EOL ;
    $msg .= $result['reception']['title'] . PHP_EOL;
    $msg .= $result['reception']['text'] . PHP_EOL;

    $file = file_put_contents('../phone/' . $phone_number . '.txt', $msg) ;
}
echo "<pre>" . print_r($result , true )."</pre>";
