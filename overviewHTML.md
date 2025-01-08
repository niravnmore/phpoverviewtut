# HTML Overview

## Basic HTML Tags

HTML stands for HyperText Markup Language. It is the standard language used to create and structure content on the web.

HTML is a markup language, not a programming language, meaning it annotates text to define how it is structured and displayed by web browsers.
It forms the building blocks of all websites and is complemented by CSS for style and JavaScript for interactivity.

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

HTML forms are used to collect user input through interactive options. There are several type of HTML forms used such as text fields, numeric inputs, email field, password field, checkboxes, radio buttons, range slider, buttons, etc.

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
