import React from 'react';
import { Link } from 'react-router';

class Footer extends React.Component {
    render() {  


        let wrap = this.props.foot;

        /* navigation */

                let nav = wrap.navigation.map( item => {
                    return <li key={ item.title }> <Link to={ item.linkTo }> { item.title } </Link> </li> 
                });

        /* navigation */

        /* contacts */

                let contacts = wrap.contacts.map( item => {
                    return <li key={ item.tell }> { item.tell } </li> 
                });

        /* contacts */

        return (
            <footer className="footer-wrapper">
                <div className="superFooter">
                        <div className="logocol">
                            <div className="logo">
                                <Link to="/">
                                    <img src="images/logo.png" alt=""/>
                                </Link>
                            </div>
                        </div>
                        <div className="contentForCol">
                            <div className="col">
                                <div className="menuFoot">
                                    <ul>
                                        { nav }
                                    </ul>
                                </div>
                            </div>
                            <div className="col">
                                <div className="location" dangerouslySetInnerHTML={{__html: wrap.adress}}></div>
                            </div>
                            <div className="col">
                                <div className="contacts">
                                    <ul>
                                        { contacts }
                                    </ul>
                                </div>
                            </div>
                        </div>
                </div>
                <div className="copyright-line">
                        <div className="con"> © 2016 Margraf S.p.a. </div>
                </div>
            </footer>
        )
    }
};

export default Footer;