import React from 'react';
import { Link } from 'react-router';
import ItemStore from '../../stores/itemStore';
import ItemActions from '../../actions/itemActions';
import $ from 'jquery';
import Slider from 'react-slick';

class Header extends React.Component {
  
  constructor(props){
    super(props);
    this.state = {
        langPack:[{
            lang:[],
            leftTitle: '',
            navigation: [],
            slider: []
        }],
        loading: true
    };
  }

  componentDidMount() {
    this.unsubscribe = ItemStore.listen(this.onStatusChange.bind(this));
    ItemActions.loadItems();
  }

  componentWillUnmount() {
    this.unsubscribe();
  }

  onStatusChange(state) {
    this.setState(state);
  }

  handleChangeLang( lang ){
      localStorage.setItem( 'lang' , lang );
      window.location.reload();
  }

  render() {    
    if ( !this.state.loading ){ // if loaded

        /* constants */

            const wrapp = this.state.items.langPack; 
            const main = wrapp.navigation;
            const currentLang = this.state.items.lang;
            const slider = this.state.items.langPack.slider;

            var settings = {
                dots: true,
                infinite: true,
                speed: 500,
                autoplay: true,
                autoplaySpeed: 2000,
                swipe: false,
                arrows: false,
                fade: true
            };
        
        /* constants */     
        
        /* array forming */

            /* navigation */

                let nav = main.map( item => {
                    return <li key={ item.title }> <Link to={ item.linkTo }> { item.title } </Link> </li> 
                });

            /* navigation */

            /* language list */
                let lang = wrapp.lang.map( item => {

                     var boundClick = this.handleChangeLang.bind( this, item.linkTo );

                    if ( item.linkTo == currentLang ){
                        return <li key={ item.title } className='current'> {item.title} </li> 
                    }
                    else {
                        return <li key={ item.title } key={item.linkTo} onClick={ boundClick }>  {item.title}  </li>  
                    }             
                });
            /* language list */

            /* slider */

                let sliderItems = slider.map( item => {

                    let divStyle = {backgroundImage: `url( ${item.bgImage} )` };

                    return <div className="item" key={item.slideId} style={divStyle} >
                                <div className="contein">
                                    <div className="mainContent">  
                                        <div className="title" 
                                        dangerouslySetInnerHTML={{__html: item.title}}>
                                        </div>
                                        <div className="subtitle">{item.subTitle}</div>
                                        <div className="buttonWrap">
                                            <Link to={item.linkTo} > 
                                                <span> {item.buttonTitle} </span>     
                                            </Link>
                                        </div>
                                    </div>
                                    <div className="descript">
                                        <div className="texts">
                                            <div className="place">{item.bgStaff.name}</div>
                                            <div className="creator">{item.bgStaff.creator}</div>
                                        </div>
                                    </div>
                                </div>                                    
                            </div>
                });
            /* slider */

        /* array forming */

        return (
            <div>
                <div className='conteiner-header'>
                    <div className="head">
                        <div className="left">
                            <div className="top-logo">
                                <img src="images/logo.png" alt=""/>
                            </div>
                            <div className="menu-material">
                                <Link to='/'>
                                    <div className="butter">
                                        <div className="first "></div>
                                        <div className="second"></div>
                                        <div className="third"></div>
                                    </div>
                                    <div className="content"> {wrapp.leftTitle} </div>
                                </Link>
                            </div>
                        </div>
                        
                        <div className="center">
                            <div className="topNavigation">
                                <div className="leftPart">                                
                                    <ul>
                                        { nav }
                                    </ul>
                                </div>
                                <div className="rightPart">
                                    <ul>
                                        <li>
                                            <img src="images/sarch.svg" alt=""/>
                                        </li>
                                        <li>
                                            <img src="images/lock.svg" alt=""/>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div className="bottomSlider">
                                <Slider {...settings}>
                                    { sliderItems }
                                </Slider>
                            </div>                            
                        </div>
                        <div className="right">
                            <div className="right-trans">
                                <div className="con"> {wrapp.rightTitle} </div>
                            </div>
                            <div className="list-lang">
                                <ul>
                                    { lang }
                                </ul>
                            </div>
                            <div className="menu-material">
                                <Link to='/'>
                                    <div className="butter">
                                        <div className="first "></div>
                                        <div className="second"></div>
                                        <div className="third"></div>
                                    </div>
                                </Link>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
            
        );
    } else {
        return (
            <div className="loaded"> loading </div>
        );
    }

  }
}

export default Header;