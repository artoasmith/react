import Reflux from 'reflux';
import mainAllAction from '../actions/mainAllActions';

let mainAllStore = Reflux.createStore({
  listenables: mainAllAction,
  
  init() {
    this.items = [];
  },

  loadmainAll() {
    this.trigger({ 
      loading: true
    });
  },

  loadmainAllCompleted(items) {
    this.items = items;
    this.trigger({ 
      items : this.items,
      loading: false
    });
  },

  loadmainAllFailed(error) {
    this.trigger({ 
      error : error,
      loading: false
    });
  }

});

export default mainAllStore;