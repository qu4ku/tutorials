import axios from 'axios';
import * as actionTypes from './actionTypes';

export const authStart = () => {
	return {
		type: actionTypes.AUTH_START
	}
}

export const authSuccess = token => {
	return {
		type: actionTypes.AUTH_SUCCESS,
		token: token
	}
}

export const authFailed = error => {
	return {
		type: actionTypes.AUTH_FAIL,
		error: error
	}
}

export const logout = () => {
	localStorage.removeItem('user');
	localStorage.removeItem('expiratoinDate');

	return {
		type: actionTypes.AUTH_LOGOUT
	};
}

export const checkAuthTimeout = expirationDate => {
	return dispatch => {
		setTimeout(() => {
			dispatch(logout());
		}, expirationDate * 1000) // because setTimout is in ms
	}
}


export const authLogin = (username, password) => {
	return dispatch => {
		dispatch(authStart());
		axios.post('http://127.0.0.1:8000/rest-auth/login/', {
			username: username,
			password: password,
		})
		.then(res => {
			const token = res.data.key;
			const expirationDate = new Date(new Date().getTime() + 3600 * 1000);
			localStorage.setItem('token', token);
			localStorage.setItem('expirationDate', expirationDate);
			dispatch(authSuccess(token));
			dispatch(checkAuthTimeout(3600)); // 1h
		})
		.catch(err => {
			dispatch(authFailed(err))
		})
	}
}

export const authSignup = (username, email, password1, password2) => {
	return dispatch => {
		dispatch(authStart());
		axios.post('http://127.0.0.1:8000/rest-auth/registration/', {
			username: username,
			email: email,
			password1: password1,
			password2: password2,
		})
		.then(res => {
			const token = res.data.key;
			const expirationDate = new Date(new Date().getTime() + 3600 * 1000);
			localStorage.setItem('token', token);
			localStorage.setItem('expirationDate', expirationDate);
			dispatch(authSuccess(token));
			dispatch(checkAuthTimeout(3600)); // 1h
		})
		.catch(err => {
			dispatch(authFailed(err))
		})
	}
}

export const authCheckState = () => {
	return dispatch => {
		const token = localStorage.getItem('token');
		if (token === undefined) {
			dispatch(logout());
		} else {
			const expirationDate = new Date(localStorage.getItem('expirationDate'));
			if (expirationDate <= new Date()) {
				dispatch(logout());
			} else {
				dispatch(authSuccess(token));
				dispatch(checkAuthTimeout((expirationDate.getTime() - new Date.getTime()) / 1000));
			}
		}
	}
}