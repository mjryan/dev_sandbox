import React, {Component} from 'react';
import {AppRegistry, Text, View, StyleSheet, ListView} from 'react-native';

export default class Component5 extends Component{
  constructor(){
      super();
      const ds = new ListView.DataSource({rowHasChanged: (r1, r2) => r1 !== r2});
      this.state = {
        userDataSource: ds,
      };
  }

  componentDidMount(){
    this.fetchUsers();
  }

  fetchUsers(){
      fetch('https://jsonplaceholder.typicode.com/users')
          .then((response) => response.json())
          .then((response) => {
              this.setState({
                userDataSource: this.state.userDataSource.cloneWithRows(response);
              });
          });
  }



  renderRow(user, sectionId, rowId, highlightRow) {
    return(
      <View style={styles.row}>
          <Text style={styles.rowText}>{user.name}</Text>
      </View>
    )
  }


  render(){
    return(
      <ListView style={styles.container}
        dataSource={this.state.userDatSource}
        renderRow={this.renderRow.bind(this)}
        />
    );
  }
}
const styles = StyleSheet.create({
  row: {
    flexDirection:'row',
    justifyContent:'center',
    padding:10,
    backgroundColor:'#f4f4f4',
    marginBottom:3
  },
  rowText: {
    flex: 1
  }
  container: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
    backgroundColor: '#F5FCFF',
  },
  welcome: {
    fontSize: 20,
    textAlign: 'center',
    margin: 10,
  },
});

AppRegistry.registerComponent('Component5', () => Component5);
