import React from 'react';
import { Link } from 'react-router';
import $ from 'jquery';
import Slider from 'react-slick';


class mainMaterial extends React.Component {
    render() {   

        /* const */
            let wrap = this.props.listMarerial;

            var settings = {
                dots: false,
                infinite: true,
                speed: 500,
                autoplay: true,
                autoplaySpeed: 5000,
                slidesToShow: 5,                
                swipe: true,
                arrows: true,
                swipeToSlide: true
            };
        /* const */

        /* render */

            /* tabs */

                let tabs = wrap.tabs.map( item => {
                    return (
                        <li key={ item.relation }>                 
                            <div className="tabber"> {item.title} </div>
                        </li> 
                    );
                });

            /* tabs */

            /* items  */

                let libMarerial = wrap.items.map( item => {
                    return (
                        <div  className="item" key={ item.id }>                 
                            <div className="topper">
                                <div className="con">
                                    <img src={item.imgLink} alt=""/>
                                </div>
                            </div>
                            <Link to={item.linkTo}>
                                <div className="descriptor">
                                    <div className="title">{item.title}</div>
                                    <div className="texter"> { item.text } </div>
                                </div>
                            </Link>
                        </div> 
                    );
                });

            /* items  */
        /* render */

        return (
            <div className="universalConteiner">
                <div className="title-line">
                    <h2> { wrap.centerTitle } </h2> 
                </div>
                <div className="tabs">
                    <ul>
                        { tabs }
                    </ul>
                </div>
                <div className="content">
                    <div className="materialWrap">
                        <Slider {...settings}> 
                            { libMarerial }
                        </Slider> 
                    </div>
                </div>
                <div className="buttoner">
                    <Link to={wrap.link.linkTo}>
                        <span>{wrap.link.linkText}</span>
                    </Link>
                </div>
            </div>
        );
    }
}

export default mainMaterial;