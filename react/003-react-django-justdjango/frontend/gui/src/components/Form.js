import React from 'react'
import { Form, Input, Button } from 'antd';


const FormItem = Form.Item;

class CustomForm extends React.Component {
  
  handleFormSubmit = (event) => {
    event.preventDefalt();
    const title = event.target.elements.title.value;
    const content = event.target.elements.content.value;

    console.log(title, content);

  }

  render() {
    return (
      <div>
        <Form onSubmit={this.handleFormSubmit}>
          <FormItem label="Title" >
            <Input name="title" placeholder="Put a title here" />
          </FormItem>
          <FormItem label="Content" >
            <Input name="content" placeholder="Put some content here" />
          </FormItem>
          <FormItem>
            <Button type="primary" htmlType="submit">Submit</Button>
          </FormItem>
        </Form>
      </div>
    );
  }
}

export default CustomForm;