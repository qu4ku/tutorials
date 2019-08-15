import React from 'react';
import { BrowserRouter as Router } from 'react-router-dom';
import { connect } from 'react-redux';
import BaseRouter from './routes';
import 'antd/dist/antd.css'; // or 'antd/dist/antd.less'
import * as actions from './store/actions/auth';

import CustomLayout from './containers/Layout';
import { Component } from 'react';


class App extends Component {

	componentDidMount() {
		this.props.onTryAutoSignup()
	}

	render() {
		return (
			<div>
			  <Router>
			    <CustomLayout {...this.props}>
			      <BaseRouter />
			    </CustomLayout>
			   </Router>
			</div>
  		);
  	}
}

const mapStateToProps = state => {
	return {
		isAutenticated: state.token !== null
	}
}

const mapDispatchToProps = dispatch => {
	return {
		onTryAutoSignup: () => dispatch(actions.authCheckState())
	}
}

export default connect(mapStateToProps, mapDispatchToProps)(App);
