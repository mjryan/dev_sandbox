import React, {Component} from 'react';
import {AppRegistry, Text, View, StyleSheet} from 'react-native';

import Component5 from './app/components/Component5/Component5';

export default class App extends Component{
  render(){
    return(
      <View style={styles.container}>
        <Component5 />
      </View>
    );
  }
}
const styles = StyleSheet.create({
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

AppRegistry.registerComponent('AwesomeProject2', () => AwesomeProject2);
