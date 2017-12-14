import React, { Component } from 'react';
import Projects from './Components/Projects';
import AddProject from './Components/AddProject';
import Photos from './Components/Photos';
import Modal from './Components/Modal';
import $ from 'jquery';
import uuid from 'uuid';
import './App.css';

class App extends Component {
  constructor(props) {
    super(props);

    this.state = {
      projects: [],
      photos: [],
      isOpen: false
    }
  }

  toggleModal = () => {
    this.setState({
      isOpen: !this.state.isOpen
    });
  }

  getPhotos(){
    $.ajax({
      url: 'https://jsonplaceholder.typicode.com/photos',
      dataType: 'json',
      cache: false,
      success: function(data){
        this.setState({photos: data.slice(0,25)}, function(){
          // console.log(this.state);
        })
      }.bind(this),
      error: function(xhr, status, err) {
        console.log(err);
      }
    })
  }

  getProjects(){
    this.setState({projects: [
      {
        id:uuid.v4(),
        title: 'Business Website',
        category: 'Web Design'
      },
      {
        id:uuid.v4(),
        title: 'Social App',
        category: 'Web Design'
      },
      {
        id:uuid.v4(),
        title: 'Ecommerce Shopping Cart',
        category: 'Web Design'
      }
    ]});
  }

  componentWillMount(){
    this.getProjects();
    this.getPhotos();
  }

  componentDidMount() {
    this.getPhotos();
  }
  handleAddProject(project) {
    let projects = this.state.projects;
    projects.push(project);
    this.setState({projects:projects});
  }

  handleDeleteProject(id){
    let projects = this.state.projects;
    let index = projects.findIndex(x => x.id === id);
    projects.splice(index, 1);
    this.setState({projects:projects});
  }

  render() {
    return (
      <div className="App container text-center">
        <AddProject addProject={this.handleAddProject.bind(this)} />
        <Projects projects={this.state.projects} onDelete={this.handleDeleteProject.bind(this)} />
        <hr />
        <button onClick={this.toggleModal}>
          Open the modal
          </button>
        <Modal show={this.state.isOpen} onClose={this.toggleModal}>
          Here's some content for the modal
        </Modal>
        <Photos photos={this.state.photos} />

      </div>
    );
  }
}

export default App;
