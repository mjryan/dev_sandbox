import React, { Component } from 'react';
import PropTypes from 'prop-types';


class PhotoItem extends Component {
  constructor(props) {
    super(props);

    this.state = {
      photos: [],
      productDetails: {},
      isOpen: false
    }
    this.handleClick = this.handleClick.bind(this);
   }

   handleClick(value) {
     console.log(`id: ${this.props.photo.id}`);
     console.log(`url: ${this.props.photo.url}`);
     console.log(`thumbnailUrl: ${this.props.photo.thumbnailUrl}`);
     console.log(`title: ${this.props.photo.title}`);
  }

  toggleModal = () => {
    this.setState({
      isOpen: !this.state.isOpen
    });
  }

  // toggleModal = () => {
  //   this.setState({
  //     productDetails: response,
  //     isOpen: !this.state.isOpen
  //   });
  // }


  // 1. In the parent component,
  //     initialize state with { productDetails: {}, showModal: false }
  // 2. When the user clicks a product, fire an AJAX request to get the details.
  // 3. When the request finishes,
  //     setState({ productDetails: response, showModal: true })

  // <detailsmodal show="{this.state.showModal}" productdetails="{this.state.productDetails}/">



  // <button onClick={this.toggleModal}>
  //   Open the modal
  //   </button>

  // return this.state.photos.map((photo,i) => {
  //   return (
  //     <li className='list-group-item' key={i} data-id={photo.id}>{photo.title}
  //     <img className="img-fluid img-thumbnail" src={photo.thumbnailUrl} alt="" onClick={() => this.handleClick(photo.id)} />
  //     </li>
  //   )

  render() {
    return(
      <span className="col-2 m-1 mb-2 p-0" data-toggle="modal" data-target="#exampleModal">
      <img className="img-fluid" src={this.props.photo.thumbnailUrl} alt="" onClick={() => this.handleClick(this)} />
      </span>
    )
  }
}
//

PhotoItem.propTypes = {
  photo: PropTypes.object
}

export default PhotoItem;
