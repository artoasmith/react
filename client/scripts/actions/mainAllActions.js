import Reflux from 'reflux';
import RefluxPromise from "reflux-promise";
import actionURL from "./actionURL";


const mainAllAction = Reflux.createActions({
  'loadmainAll': {children: ['completed', 'failed']}
});

mainAllAction.loadmainAll.listen(function(){

  let currentLang = 'ru';
  let currentURL = actionURL.MAIN_PAGE_RU ;

  if ( localStorage.getItem('lang') === null ){

      localStorage.setItem( 'lang' , currentLang );

  } else 
  if ( localStorage.getItem('lang') == 'ru' ){

    currentURL = actionURL.MAIN_PAGE_RU ;

  } else 
  if( localStorage.getItem('lang') == 'en' ) {

    currentURL = actionURL.MAIN_PAGE_EN ;

  };

  fetch( currentURL )
    .then((response) => {
        if(response.ok){
          return response.json();
        }      
    })
    .then(function(json) {  
      mainAllAction.loadmainAll.completed(json);
    })
    .catch(function() { 

      mainAllAction.loadmainAll.failed('error');
      alert('some shit');
      
    });

});

export default mainAllAction;