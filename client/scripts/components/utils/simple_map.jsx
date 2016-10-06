import React, {Component} from 'react';
import GoogleMap from 'google-map-react';

export default class SimpleMapPage extends Component {
    
  constructor(props) {
    super(props);
  };

  render() {
    return (
       <GoogleMap
        bootstrapURLKeys={{key: "AIzaSyBaArhAKP5_kll8TzOpRNNUwzjJdATL-7o"}}
        defaultCenter={{lat: 59.938043, lng: 30.337157}}
        defaultZoom={8}
        >
      </GoogleMap>
    );
  }
}