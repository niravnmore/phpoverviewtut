# HTML Overview

## Basic HTML Tags

**What is HTML?**

- HTML stands for Hyper Text Markup Language. 
- It is the standard language used to create and structure content on the web document or web page.
- HTML is a markup language, not a programming language, meaning it annotates text to define how it is structured and displayed by web browsers.
- It forms the building blocks of all websites and is complemented by CSS for style and JavaScript for interactivity.
- HTML consist of elements by which the web content can be structured.

**Why to use HTML**

- HTML is standard markup language for creating web document / webpages.
- HTML describes the structure of a webpage document.

**How to use HTML**

- HTML consists of series of elements with the help of which a content can be described.
- HTML elements are understood by browsers and tell them how to display the content.
- HTML element label pieces of content 

```html
<!DOCTYPE html>
<html>

<head>
    <title>My First Webpage</title>
</head>

<body>
    <h1>Welcome to My Webpage</h1>
    <p>This is my first paragraph of text!</p>
</body>

</html>
```

<table>
<tr>
<th>Tag Name</th>
<th>Uses, Description</th>
</tr>
<tr>
<td>&#60!DOCTYPE&#62</td>
<td>Define type of the document</td>
</tr>
<tr>
<td>&#60html&#62...&#60/html&#62</td>
<td>Root of an HTML document</td>
</tr>
<tr>
<td>&#60head&#62...&#60/head&#62</td>
<td>Contains all the metadata for html document</td>
</tr>
<tr>
<td>&#60title&#62...&#60/title&#62</td>
<td>Defines title of the document</td>
</tr>
<tr>
<td>&#60meta/&#62</td>
<td>Contains metadata information like character set, viewport, author</td>
</tr>
<tr>
<td>&#60base/&#62</td>
<td>Mentions default URL for all link on page</td>
</tr>
<tr>
<td>&#60link/&#62</td>
<td>Mentions link to external sources</td>
</tr>
<tr>
<td>&#60style&#62...&#60/style&#62</td>
<td>Contains styles for the document</td>
</tr>
<tr>
<td>&#60noscript&#62...&#60/noscript&#62</td>
<td>Contains alternate content to be displayed if browser does not support scripts</td>
</tr>
<tr>
<td>&#60body&#62...&#60/body&#62</td>
<td>Contains main body of the document</td>
</tr>
<tr>
<td> </td>
<td> </td>
</tr>
</table>


## HTML Tables

HTML tables provide an option to arrange data into rows and columns, making it easy to display information in a tabular form.

<table>
<tr>
<th>HTML Tags</th>
<th>Description</th>
</tr>
<tr>
<td>&#60table&#62</td>
<td>Defines the structure for organizing data in rows and columns within a web page. </td>
</tr>
<tr>
<td>&#60tr&#62</td>
<td>Represents a row within an HTML table, containing individual cells.</td>
</tr>
<tr>
<td>&#60th&#62</td>
<td>Shows a table header cell that typically holds titles or headings.</td>
</tr>
<tr>
<td>&#60td&#62</td>
<td>Represents a standard data cell, holding content or data.</td>
</tr>
<tr>
<td>&#60caption&#62</td>
<td>Provides a title or description for the entire table.</td>
</tr>
<tr>
<td>&#60thead&#62</td>
<td>Defines the header section of a table, often containing column labels.</td>
</tr>
<tr>
<td>&#60tbody&#62</td>
<td>Represents the main content area of a table, separating it from the header or footer.</td>
</tr>
<tr>
<td>&#60tfoot&#62</td>
<td>Specifies the footer section of a table, typically holding summaries or totals.</td>
</tr>
<tr>
<td>&#60col&#62</td>
<td>Defines attributes for table columns that can be applied to multiple columns at once.</td>
</tr>
<tr>
<td>&#60colgroup&#62</td>
<td>Groups together a set of columns in a table to which you can apply formatting or properties collectively.</td>
</tr>
<tr>
<td> </td>
<td> </td>
</tr>
<tr></tr>
</table>

#### Example for HTML table
```html
<!-- index.html -->
<!DOCTYPE html>
<html>
<body>
    <table>
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Marks</th>
        </tr>
        <tr>
            <td>Priya</td>
            <td>Patel</td>
            <td>91</td>
        </tr>
        <tr>
            <td>Varun</td>
            <td>Shah</td>
            <td>54</td>
        </tr>
        <tr>
            <td>Akhil</td>
            <td>Dhar</td>
            <td>86</td>
        </tr>
    </table>
</body>
</html>
```

## HTML Forms

HTML forms are used to collect user input through interactive options. There are several types of HTML forms used such as text fields, numeric inputs, email field, password field, checkboxes, radio buttons, range slider, buttons, etc.

<table>
<tr>
<th>HTML Tags</th>
<th>Description</th>
</tr>
<tr>
<td>&#60form&#62</td>
<td>Serves as a container to hold all the elements of the form.</td>
</tr>
<tr>
<td>&#60label&#62</td>
<td>It defines labels for <b>&#60form&#62</b> elements.</td>
</tr>
<tr>
<td>&#60input&#62</td>
<td>It is used to get input data from the form in various types such as text, password, email, etc by changing its type.</td>
</tr>
<tr>
<td>&#60button&#62</td>
<td>It defines a clickable button to control other elements or execute a functionality.</td>
</tr>
<tr>
<td>&#60select&#62</td>
<td>It is used to create a drop-down list.</td>
</tr>
<tr>
<td>&#60textarea&#62</td>
<td>It is used to get long text input.</td>
</tr>
<tr>
<td>&#60fieldset&#62</td>
<td>It is used to draw a box around other form elements and group the related data.</td>
</tr>
<tr>
<td>&#60legend&#62</td>
<td>It defines a caption for fieldset elements</td>
</tr>
<tr>
<td>&#60datalist&#62</td>
<td>It is used to specify pre-defined list options for input controls.</td>
</tr>
<tr>
<td>&#60output&#62</td>
<td>It displays the output of performed calculations.</td>
</tr>
<tr>
<td>&#60option&#62</td>
<td>It is used to define options in a drop-down list.</td>
</tr>
<tr>
<td>&#60optgroup&#62</td>
<td>It is used to define group-related options in a drop-down list.</td>
</tr>
<tr>
<td> </td>
<td> </td>
</tr>
<tr></tr>
</table>

### Different Input Types of HTML forms

In HTML forms, various input types are used to collect different types of data from users. Here are some commonly used input types:

<table>
<tr>
<th>HTML Tags</th>
<th>Description</th>
</tr>
<tr>
<td>&#60input type='text'&#62</td>
<td>Defines a one-line text input field</td>
</tr>
<tr>
<td>&#60input type='password'&#62</td>
<td>Defines a password field</td>
</tr>
<tr>
<td>&#60input type='submit'&#62</td>
<td>Defines a submit button</td>
</tr>
<tr>
<td>&#60input type='reset'&#62</td>
<td>Defines a reset button</td>
</tr>
<tr>
<td>&#60input type='radio'&#62</td>
<td>Defines a radio button</td>
</tr>
<tr>
<td>&#60input type='email'&#62</td>
<td>Validates that the input is a valid email address.</td>
</tr>
<tr>
<td>&#60input type='number'&#62</td>
<td>Allows the user to enter a number. You can specify min, max, and step attributes for range.</td>
</tr>
<tr>
<td>&#60input type='checkbox'&#62</td>
<td>Used for checkboxes where the user can select multiple options.</td>
</tr>
<tr>
<td>&#60input type='date'&#62</td>
<td>Allows the user to select a date from a calendar.</td>
</tr>
<tr>
<td>&#60input type='time'&#62</td>
<td>Allows the user to select a time.</td>
</tr>
<tr>
<td>&#60input type='file'&#62</td>
<td>Allows the user to select a file to upload.</td>
</tr>
<tr>
<td> </td>
<td> </td>
</tr>
<tr></tr>
</table>

heading 
paragraph
link

<html>
<head>
<title>My first page</title>
</head>
<body>

<p>Hello</p>
<p>Hello</p>
<p>Hello</p>

<h1>Heading</h1>
<h2>Heading</h2>
<h3>Heading</h3>
<h4>Heading</h4>
<h5>Heading</h5>
<h6>Heading</h6>

<img src="logo.png" height='250px' width='250px'>

<br>

<a href="http://www.apple.com/">I am a link</a>

<a href="http://www.apple.com/">
    <img src="logo.png" height='250px' width='250px'>
</a>

<ul>
    <li>Coffee</li>
    <li>Tea</li>
    <li>Milk</li>
</ul>

<ul type="disc">
    <li>Coffee</li>
    <li>Tea</li>
    <li>Milk</li>
</ul>

<ul type="circle">
    <li>Coffee</li>
    <li>Tea</li>
    <li>Milk</li>
</ul>

<ul type="square">
    <li>Coffee</li>
    <li>Tea</li>
    <li>Milk</li>
</ul>

<ul type="none">
    <li>Coffee</li>
    <li>Tea</li>
    <li>Milk</li>
</ul>

<ol type="1">
    <li>Coffee</li>
    <li>Tea</li>
    <li>Milk</li>
</ol>

<ol type="A">
    <li>Coffee</li>
    <li>Tea</li>
    <li>Milk</li>
</ol>

<ol type="a">
    <li>Coffee</li>
    <li>Tea</li>
    <li>Milk</li>
</ol>

<ol type="i">
    <li>Coffee</li>
    <li>Tea</li>
    <li>Milk</li>
</ol>

<ol type="I">
    <li>Coffee</li>
    <li>Tea</li>
    <li>Milk</li>
</ol>

<ol type="a">
    <li>Coffee</li>
        <ol type="i">
            <li>Coffee</li>
            <li>Tea</li>
            <li>Milk</li>
        </ol>   
    <li>Tea</li>
    <li>Milk</li>
</ol>

<h3>Definition List</h3>
<dl>
    <dt type="">Coffee</dt>
    <dd>Hot Coffee</dd>
    <dd>Cold  Coffee</dd>
    <dt type="">Tea</dt>
    <dd>Basic Tea</dd>
    <dd>Masala Tea</dd>
</dl>

<hr/>


</body>

</html>

table properties 

- **Border** - to add border for the table
- **Align** - to set table alignment or cell alignment
- **Width** - to set table width
- **Cellpadding** - to set gap between content and table border
- **Cellspacing** - to set gap between two cells or their cell borders.
- **Rowspan** - to expand cell over multiple rows
- **Colspan** - to expand cell over multiple columns.
- **Background-color** - to 

Scope for HTML tags

Some tags in HTML have block scope such as Heading tags, paragraph tags, div tags.

Some tags in HTML have inline scope such as anchor link tags, span tag,

