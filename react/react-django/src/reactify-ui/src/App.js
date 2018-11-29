import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';
import {BrowserRouter, Route, Redirect, Switch} from 'react-router-dom';

import Posts from './posts/Posts';
import PostDetail from './posts/PostDetail';

class App extends Component {
  render() {
    return (
    	<BrowserRouter>
    		<Switch>
    			<Route exact path='/posts' component={Posts} />
    			<Route exact path='/posts/:slug' component={PostDetail} />
      		<Route component={Posts} />
      	</Switch>
      </BrowserRouter>
    );
  }
}

export default App;
