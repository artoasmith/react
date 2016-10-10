import Reflux from 'reflux';
import RefluxPromise from "reflux-promise";
import actionURL from "./actionURL";


const ItemActions = Reflux.createActions({
  'loadItems': {children: ['completed', 'failed']}
});

ItemActions.loadItems.listen(function(){

  let currentLang = 'ru';
  let currentURL = actionURL.HEADER_RU ;

  if ( localStorage.getItem('lang') === null ){

      localStorage.setItem( 'lang' , currentLang );

  } else 
  if ( localStorage.getItem('lang') == 'ru' ){

    currentURL = actionURL.HEADER_RU ;

  } else 
  if( localStorage.getItem('lang') == 'en' ) {

    currentURL = actionURL.HEADER_EN ;

  };


  fetch( currentURL )
    .then((response) => {

        if(response.ok){
          return response.json();
        }      

    })
    .then(function(json) {  
      ItemActions.loadItems.completed(json);
    })
    .catch(function() { 
      ItemActions.loadItems.failed('error');      
    });

});

export default ItemActions;