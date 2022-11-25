jQuery (documento).ready ( function ( $ ){
    janela . onscroll  =  function  ( )  {
        if  ( janela . pageYOffset  >  140 )  {
          $ ( "#header" ) . addClass ( "active" ) ;
        }  else  {
          $ ( "#header" ) . removeClass ( "active" ) ;
}
    }
});
    