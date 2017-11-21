import React, {Component} from 'react';
import {AppRegistry, Text, FlatList, StyleSheet, View} from 'react-native';

const users = [
  {name: 'John Doe'},
  {name: 'Brad Traversy'},
  {name: 'Matt Smith'},
  {name: 'Janet Doe'}
]

export default class Component4 extends Component{
  render() {
    return (
      <View style={styles.container}>
        <FlatList
          data={[
            {key: 'Devin'},
            {key: 'Jackson'},
            {key: 'James'},
            {key: 'Joel'},
            {key: 'John'},
            {key: 'Jillian'},
            {key: 'Jimmy'},
            {key: 'Julie'},
          ]}
          renderItem={({item}) => <Text style={styles.item}>{item.key}</Text>}
        />
      </View>
    );
  }
}
const styles = StyleSheet.create({
  container: {
   flex: 1,
   paddingTop: 22
  },
  item: {
    padding: 10,
    fontSize: 18,
    height: 44,
  },
})

AppRegistry.registerComponent('Component4', () => Component4);
