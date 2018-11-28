// 1:42:30

import React, {Component} from 'react'


class PostCreate extends Component {
	constructor(props){
		super(props)
		this.handleSubmit = this.handleSubmit.bind(this)
		this.handleInputChange = this.handleInputChange.bind(this)
	}
	
	handleSubmit(event){
		event.preventDefault()
	}

	handleInputChange(event){
		event.preventDefault()
		console.log(event.target.name, event.target.value)
		this.setState({
			[event.target.name]: event.target.value
		})
	}
	render(){
		return (
			<form onSubmit={this.handleSubmit}>
				<div className='form-group'>
					<label for='title'>Post title</label>
					<input type='text' id='title' name='title' className='form-control' placeholder='Blogpost title' onChange={this.handleInputChange} />
				</div>
				<div className='form-group'>
					<label for='content'>Content</label>
					<textarea id='content' name='content' className='form-control' placeholder='Blogpost content' onChange={this.handleInputChange} />
				</div>
				<div className='form-group'>
					<label for='draft'>
					<input type='checkbox' id='draft' name='draft' className='mr-2' onChange={this.handleInputChange} />
					Draft</label>
				</div>
				<div className='form-group'>
					<label for='title'>Post title</label>
					<input type='date' id='publish' name='publish' className='form-control' onChange={this.handleInputChange} />
				</div>
				<button className='btn btn-primary'>Save</button>
			</form>
		)
	}
}

export default PostCreate