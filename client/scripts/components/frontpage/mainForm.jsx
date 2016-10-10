import React from 'react';
import { Link } from 'react-router';
import $ from 'jquery';
import GoogleMap from '../googleMap.jsx';
import validator from 'validator';
import classNames from 'classnames';
import FormContact from '../utils/formContact.jsx';
import { Form } from 'formsy-react';
import Map from '../utils/simple_map.jsx';

const MyInput = React.createClass({
  mixins: [Formsy.Mixin],
  changeValue(event) {
    this.setValue(event.currentTarget[this.props.type === 'checkbox' ? 'checked' : 'value']);
  },
  render() {
    const className = 'form-group' + (this.props.className || ' ') + (this.showRequired() ? 'required' : this.showError() ? 'error' : null);
    const errorMessage = this.getErrorMessage();
    return (
      <div className={className}>
        <label htmlFor={this.props.name}>{this.props.title}</label>
        <input
          type={this.props.type || 'text'}
          name={this.props.name}
          onChange={this.changeValue}
          value={this.getValue()}
          checked={this.props.type === 'checkbox' && this.getValue() ? 'checked' : null}
        />
        <span className='validation-error'>{errorMessage}</span>
      </div>
    );
  }
});

const MyTextarea = React.createClass({
  mixins: [Formsy.Mixin],
  changeValue(event) {
    this.setValue(event.currentTarget[this.props.type === 'checkbox' ? 'checked' : 'value']);
  },
  render() {
    const className = 'form-group' + (this.props.className || ' ') + (this.showRequired() ? 'required' : this.showError() ? 'error' : null);
    const errorMessage = this.getErrorMessage();
    return (
      <div className={className}>
        <label htmlFor={this.props.name}>{this.props.title}</label>
        <textarea
          type={'text'}
          name={this.props.name}
          onChange={this.changeValue}
          value={this.getValue()}
          checked={this.props.type === 'checkbox' && this.getValue() ? 'checked' : null}
        />
        <span className='validation-error'>{errorMessage}</span>
      </div>
    );
  }
});

const FormA = React.createClass({
  getInitialState() {
    return { canSubmit: false };
  },
  submit(data) {
    alert(JSON.stringify(data, null, 4));
  },
  enableButton() {
    this.setState({ canSubmit: true });
  },
  disableButton() {
    this.setState({ canSubmit: false });
  },
  render() {
    return (
      <Formsy.Form onSubmit={this.submit} onValid={this.enableButton} onInvalid={this.disableButton} className="login">
        <MyInput name="email" title="Email" validations="isEmail" validationError="This is not a valid email" required />
        <MyInput name="password" title="Password" type="password" required />
        <MyTextarea name="massage" title="Password" type="password" required />
        
        <div className="buttons">
          <button type="submit" disabled={!this.state.canSubmit}>Submit</button>
        </div>
      </Formsy.Form>
    );
  }
});

class mainForm extends React.Component {
    submitForm(e){
        e.preventDefault();
        console.log( validator.isEmail('foo@bar.com') );
    }

    changeField(e){
        console.log( e.target.name );
        var text = e.target.value ;
        console.log( text );
    }

    render() { 

        /* const */   
            let wrap = this.props.listForm ;
        /* const */    
        /* render */

            /* contact */
                let contact = wrap.contact.map( item => {
                    return ( 
                        <li key={ item.content }>
                            <div className="leftPart"> {item.title} </div>
                            <div className="rightPart"> {item.content} </div>
                        </li> 
                    );
                });
            /* contact */

            /* socials */

                let soc = wrap.socials.map( item => {
                    return ( 
                        <li key={ item.linkTo }>
                            <Link to={ item.linkTo } target="_blank">
                                <img src={ item.image } alt=""/>
                            </Link>
                        </li> 
                    );
                });

            /* socials */

        /* render */

        return (
            <div className="universalConteiner">
                <div className="title-line">
                    <h2>  {wrap.centerTitle}  </h2> 
                </div>
                <div className="content">
                    <div className="contactWrap">
                        <div className="form-part">
                            <div className="topper">
                                <ul className="contact-row">
                                    { contact }
                                </ul>
                                <ul className="soc-row">
                                    { soc }
                                </ul>
                            </div>
                            <div className="former">
                                <FormContact contentForm={wrap.formcontent} />
                            </div>
                        </div>
                        <div className="mapPart">
                            <Map />
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default mainForm;