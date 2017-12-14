import React, { Component } from 'react';
import PropTypes from 'prop-types';
import PhotoItem from './PhotoItem';

class Photos extends Component {

  render() {
    let photoItems;
    if (this.props.photos) {
      photoItems = this.props.photos.map(photo => {
        // console.log(photo.id);

         return (
           <PhotoItem key={photo.id} photo={photo} />
        );
      });
    }

    return (
      <div className="Photos container text-center">
        <h3>Photos</h3>
        <div className="row col-11 offset-1">
          {photoItems}
        </div>
      </div>
    );
  }
}

Photos.propTypes = {
  photos: PropTypes.array
}

export default Photos;
