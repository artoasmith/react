import React from 'react';
import Formsy from 'formsy-react';
import MyInput from '../utils/MyOwnInput.jsx';
import MyTextarea from '../utils/MyOwnTextarea.jsx';
import actionURL from "../../actions/actionURL";

const FormContact = React.createClass({

  getInitialState() {
    return { canSubmit: false };
  },

  submit(data) {

    fetch( actionURL.FORM_ON_MAIN  , {  
      method: 'post',  
      headers: {  
        "Content-type": "application/x-www-form-urlencoded; charset=UTF-8"  
      },  
      body: data  
    }).then( console.log("done") );
    
  },
  enableButton() {
    this.setState({ canSubmit: true });
  },
  disableButton() {
    this.setState({ canSubmit: false });
  },

  
  render() {
    return (
      <Formsy.Form onSubmit={this.submit} onValid={this.enableButton} onInvalid={this.disableButton} className="contact">
        <MyInput 
          name="name" 
          title="" 
          placeholder={ this.props.contentForm.namelPH} 
          validationError="This is not a valid email" 
          required 
        />

        <MyInput 
          name="phone" 
          title="" 
          validations="isInt"
          placeholder={ this.props.contentForm.phonePH} 
          type="tel" 
          required 
        />

        <MyInput 
          name="email" 
          title="" 
          placeholder={ this.props.contentForm.emailPH } 
          type="email" 
          validations="isEmail" 
          required 
        />

        <MyTextarea 
          name="massage" 
          placeholder={ this.props.contentForm.textareaPH} 
          title=""           
          type="text" 
        />
        
        <div className="row-submit">
          <button type="submit" disabled={!this.state.canSubmit}> <span> Submit </span> </button>
        </div>
      </Formsy.Form>
    );
  }
});

export default FormContact;