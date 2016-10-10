import React from 'react';
import mainAllStore from '../stores/mainAllStore';
import mainAllActions from '../actions/mainAllActions';
import HeaderOnMain from '../components/frontpage/mainHeader.jsx';
import MainNews from '../components/frontpage/mainNews.jsx';
import MainLib from '../components/frontpage/mainLibrary.jsx';
import MainStones from '../components/frontpage/mainStones.jsx';
import MainPartners from '../components/frontpage/mainPartners.jsx';
import MainQuality from '../components/frontpage/mainQuality.jsx';
import Footer from '../components/footer.jsx';
import MainForm from '../components/frontpage/mainForm.jsx';
import MainMaterial from '../components/frontpage/mainMaterial.jsx';




class Home extends React.Component {
  
  constructor(props){
    super(props);
    this.state = {
      items : [{
        News: {
          centerTitle: '',
          link : {
            linkText: '',
            linkTo: ''
          }
        }
      }],
      loading: true
    };
  }

  componentDidMount() {
    this.unsubscribe = mainAllStore.listen(this.onStatusChange.bind(this));
    mainAllActions.loadmainAll();
  }

  componentWillUnmount() {
    this.unsubscribe();
  }

  onStatusChange(state) {
    this.setState(state);
  }

  render() {

    let news = '' ;
    let stones = '';
    let quality = '';
    let partner = '';
    let lib = '';
    let form = '';
    let footer = '';
    let material = '' ;

    console.log(this.state.items);

    if ( !this.state.loading ){

        news = <MainNews listNews={ this.state.items.News }/> ;
        stones = <MainStones listStones={ this.state.items.Stones } /> ;
        quality = <MainQuality listQuality={ this.state.items.Quality } />;
        partner = <MainPartners listPartners= { this.state.items.Partner } />;
        lib = <MainLib listLib={ this.state.items.Library } /> ;   
        material = <MainMaterial listMarerial={ this.state.items.Marerial }/>
        form = <MainForm listForm={ this.state.items.Form } />;
        footer = <Footer foot={ this.state.items.Footer } />;
        
    }

    return (
        <div className="global-wraper">
            <HeaderOnMain />
            <div className="main">
                { news }
                { material }
                { stones }
                { quality }
                { partner }
                { lib }
                { form }
            </div>
            { footer }
        </div>
        
    );
  }
}

export default Home;