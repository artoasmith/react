import React from 'react';
import Formsy from 'formsy-react';

const MyTextarea = React.createClass({

  mixins: [Formsy.Mixin],

  changeValue(event) {
    this.setValue(event.currentTarget[this.props.type === 'checkbox' ? 'checked' : 'value']);
  },
  render() {
    const className = 'form-group' + (this.props.className || ' ') +
      (this.showRequired() ? 'required' : this.showError() ? 'error' : '');
    const errorMessage = this.getErrorMessage();

    return (
      <div className={className}>
        <label htmlFor={this.props.name}>{this.props.title}</label>
        <textarea
          type={'text'}
          placeholder={this.props.placeholder || 'placeholder' }
          name={this.props.name}
          onChange={this.changeValue}
          value={this.getValue()}
          checked={this.props.type === 'checkbox' && this.getValue() ? 'checked' : null}
        ></textarea>
        <span className='validation-error'>{errorMessage}</span>
      </div>
    );
  }
});

export default MyTextarea;