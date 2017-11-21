import React, {Component} from 'react';
import {AppRegistry, Text, View, TextInput, Switch, StyleSheet} from 'react-native';


export default class Component3 extends Component{
  constructor(props) {
   super(props);
   this.state = {
     textValue: 'Hello',
     switchValue: false
   };
  }

  onChangeText(value){
    this.setState({
      textValue:value
    });
  }

  onSubmit(){
    alert('Input Submitted...');
  }

  onSwitchChange(value){
    this.setState({
      switchValue:value
    });
  }

  render(){
    return(
      <View style={{padding: 10}}>
        <TextInput
          style={{height: 40}}
          placeholder="Enter Text"
          value={this.state.textValue}
          onChangeText={(value) => this.onChangeText(value)}
          onSubmitEditing={this.onSubmit}
        />
        <Text style={{padding: 10, fontSize: 42}}>
          {this.state.textValue}
        </Text>
        <Switch
            value={this.state.switchValue}
            onValueChange={(value) => this.onSwitchChange(value)}
        />
      </View>
    );
  }
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
    backgroundColor: 'red',
  },
  tColor: {
    color: 'black'
  }
});

AppRegistry.registerComponent('Component3', () => Component3);
