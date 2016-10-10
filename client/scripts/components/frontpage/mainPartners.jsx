import React from 'react';
import { Link } from 'react-router';
import $ from 'jquery';
import Slider from 'react-slick';


class mainPartners extends React.Component {
    render() {    

        /* constants */
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

            let wrap = this.props.listPartners;
        /* constants */

        /* render */
            let partnerList = wrap.items.map( item => {
                return (
                    <div className="item" key={ item.id }>
                        <a href={item.linkTo} target="_blank"> 
                            <div className="con">
                                <img src={item.img} alt=""/>
                            </div>
                        </a>
                    </div> 
                );
            });
        /* render */

        return (
            <div className="universalConteiner">
                <div className="title-line">
                    <h2> {wrap.centerTitle} </h2> 
                </div>
                <div className="content">
                    <div className="partnersWrap">
                        <Slider {...settings}>                        
                            { partnerList }
                        </Slider>
                    </div>
                </div>
            </div>
        );
    }
}

export default mainPartners;