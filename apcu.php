<?php

define( "WORKER_NUM" , 1 );
//设置
//function setConnlist( $fd , $conn ){
//     if( WORKER_NUM > 1 ) {
//            $list[$fd] = $conn;apcu_store( "webchat_conn_list" , $list ); 
//    } else {
//            self::$connections[$fd] = $conn; 
//}
//获取
//function getConnlist(){ 
//    if( WORKER_NUM > 1 ) {
//        $list = apcu_fetch( "webchat_conn_list" );
//    }
//     return self::$connections;
// }

$s = isset($_GET['c'])?$_GET['c']:'I love wenyin';

apcu_store('ccc', $s);
  
 ?>