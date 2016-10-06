import React from 'react';
import { Link } from 'react-router';
import $ from 'jquery';


class mainNews extends React.Component {
    render() {            


        /* const */
            let wrap = this.props.listNews;
        /* const */

        /* render */
         let newsList = wrap.items.map( item => {
            return (
                <li key={ item.id }>                 
                        <div className="topper">
                        <div className="con">
                            <img src={item.imgLink} alt=""/>
                        </div>
                    </div>
                    <div className="descriptor">
                        <div className="date">{item.date}</div>
                        <div className="title">{item.title}</div>
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
                    <h2> { wrap.centerTitle } </h2> 
                </div>
                <div className="content">
                    <div className="newsWrap">
                        <ul>
                            { newsList }
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

export default mainNews;