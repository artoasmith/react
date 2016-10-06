import React from 'react';
import { Link } from 'react-router';
import $ from 'jquery';


class mainStones extends React.Component {   
    render() {    

        /* const */
            let wrap = this.props.listStones;
        /* const */

        /* render */
            let stonesList = wrap.items.map( item => {
                return (
                    <li key={ item.id }>
                        <div className="topper">
                            <div className="con">
                                <img src={item.img} alt=""/>
                            </div>
                        </div>
                        <div className="descriptor">
                            <div className="title">{item.title}</div>
                            <div className="descript">{item.text}</div>
                            <div className="readMore">
                                <Link to={item.linkTo}>
                                    <span>{item.linkText}</span>
                                </Link>
                            </div>
                        </div>
                    </li> 
                );
            });
        /* render */

        return (
            <div className="universalConteiner">
                <div className="title-line">
                    <h2> {wrap.centerTitle} </h2> 
                </div>
                <div className="content">
                    <div className="stonesWrap">
                        <ul>
                            { stonesList }
                        </ul>
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

export default mainStones;