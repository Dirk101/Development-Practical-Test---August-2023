<!DOCTYPE html>
<head>

<title>Development Practical Test - August 2023</title>

<script>
// Defining a function to display error message
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

// Defining a function to validate form 
function validateForm() {
    // Retrieving the values of form elements 
    var name = document.clientForm.name.value;
    var client_code = document.clientForm.client_code.value;
    var no_linked_contacts = document.clientForm.no_linked_contacts.value;





    
	// Defining error variables with a default value
    var nameErr = client_codeErr = no_linked_contactsErr = true;
    
    // Validate name
    if(name == "") {
        printError("nameErr", "Please enter your name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(name) === false) {
            printError("nameErr", "Please enter a valid name");
        } else {
            printError("nameErr", "");
            nameErr = false;
        }
    }
    
    // Validate client_code
    if(client_code == "") {
        printError("client_codeErr", "Please enter your Client Code");
    } else {
        var regex = /^(?=[^\s]*?[0-9])(?=[^\s]*?[a-zA-Z])[a-zA-Z0-9]*$/;               
        if(regex.test(client_code) === false) {
            printError("client_codeErr", "Please enter a valid Client Code");
        } else {
            printError("client_codeErr", "");
            client_codeErr = false;
        }
    }
    
    // Validate no_linked_contacts number
    if(no_linked_contacts == "") {
        printError("no_linked_contactsErr", "Please enter number of contacts linked");
    } else {
        var regex = /^[1-9]/;
        if(regex.test(no_linked_contacts) === false) {
            printError("no_linked_contactsErr", "Please enter a valid number of times contact linked");
        } else{
            printError("no_linked_contactsErr", "");
            no_linked_contactsErr = false;
        }
    }
    

    

    
    // Prevent the form from being submitted if there are any errors
    if((nameErr || client_codeErr || no_linked_contactsErr) == true) {
       return false;
    } else {
        // Creating a string from input data for preview
        var dataPreview = "You've entered the following details: \n" +
                          "Full Name: " + name + "\n" +
                          "Client Code: " + client_code + "\n" +
                          "Number of Linked Contacts: " + no_linked_contacts + "\n";
        
        // Display input data in a dialog box before submitting the form
        alert(dataPreview);
    }
};
</script>

<script>
// Defining a function to display error message
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

// Defining a function to validate form 
function validateForm2() {
    // Retrieving the values of form elements 
    var name2 = document.clientForm2.name2.value;
	var surname = document.clientForm2.surname.value;
    var email = document.clientForm2.email.value;
	var company_name = document.clientForm2.company_name.value;

    
	// Defining error variables with a default value
    var name2Err = surnameErr = emailErr = companynameErr = true;
    
    // Validate name
    if(name2 == "") {
        printError("name2Err", "Please enter your Name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(name2) === false) {
            printError("name2Err", "Please enter a valid Name");
        } else {
            printError("name2Err", "");
            name2Err = false;
        }
    }
	
	    // Validate surname
    if(surname == "") {
        printError("surnameErr", "Please enter your Surname");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(surname) === false) {
            printError("surnameErr", "Please enter a valid Surname");
        } else {
            printError("surnameErr", "");
            surnameErr = false;
        }
    }
	
	
    
    // Validate email address
    if(email == "") {
        printError("emailErr", "Please enter your email address");
    } else {
        // Regular expression for basic email validation
        var regex = /^\S+@\S+\.\S+$/;
        if(regex.test(email) === false) {
            printError("emailErr", "Please enter a valid email address");
        } else{
            printError("emailErr", "");
            emailErr = false;
        }
    }
	
	
	    // Validate company_name
    if(company_name == "") {
        printError("company_nameErr", "Please enter your company_name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(company_name) === false) {
            printError("company_nameErr", "Please enter a valid company_name");
        } else {
            printError("company_nameErr", "");
            company_nameErr = false;
        }
    }
	
    
    
    
    // Prevent the form from being submitted if there are any errors
    if((name2Err || surnameErr || emailErr || company_nameErr) == true) {
       return false;
    } else {
        // Creating a string from input data for preview
        var dataPreview = "You've entered the following details: \n" +
                          "Full Name: " + surname + " " + name2 + "\n" +
                          "Email Address: " + email + "\n" +
                          "Company Name: " + company_name + "\n";
      
        // Display input data in a dialog box before submitting the form
        alert(dataPreview);
    }
};
</script>


<script>
// Defining a function to display error message
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

// Defining a function to validate form 
function validateForm3() {
    // Retrieving the values of form elements 
    var name3 = document.clientForm3.name3.value;
	var surname2 = document.clientForm3.surname2.value;
    var email2 = document.clientForm3.email2.value;
	var no_linked_contacts2 = document.clientForm3.no_linked_contacts2.value;

    
	// Defining error variables with a default value
    var name3Err = surname2Err = email2Err = no_linked_contacts2Err = true;
    
    // Validate name
    if(name3 == "") {
        printError("name3Err", "Please enter your Name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(name3) === false) {
            printError("name3Err", "Please enter a valid Name");
        } else {
            printError("name3Err", "");
            name3Err = false;
        }
    }
	
	    // Validate surname2
    if(surname2 == "") {
        printError("surname2Err", "Please enter your Surname");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(surname2) === false) {
            printError("surname2Err", "Please enter a valid Surname");
        } else {
            printError("surname2Err", "");
            surname2Err = false;
        }
    }
	
	
    
    // Validate email2 address
    if(email2 == "") {
        printError("email2Err", "Please enter your email address");
    } else {
        // Regular expression for basic email2 validation
        var regex = /^\S+@\S+\.\S+$/;
        if(regex.test(email2) === false) {
            printError("email2Err", "Please enter a valid email address");
        } else{
            printError("email2Err", "");
            email2Err = false;
        }
    }
	
	
	    // Validate no_linked_contacts2
    if(no_linked_contacts2 == "") {
        printError("no_linked_contacts2Err", "Please enter your number of linked contacts");
    } else {
        var regex = /^[1-9]/;               
        if(regex.test(no_linked_contacts2) === false) {
            printError("no_linked_contacts2Err", "Please enter a valid number of linked contacts");
        } else {
            printError("no_linked_contacts2Err", "");
            no_linked_contacts2Err = false;
        }
    }
	
    
    
    
    // Prevent the form from being submitted if there are any errors
    if((name3Err || surname2Err || email2Err || no_linked_contacts2Err) == true) {
       return false;
    } else {
        // Creating a string from input data for preview
        var dataPreview = "You've entered the following details: \n" +
                          "Full Name: " + surname2 + " " + name3 + "\n" +
                          "Email Address: " + email2 + "\n" +
                          "Number of linked contacts: " + no_linked_contacts2 + "\n";
      
        // Display input data in a dialog box before submitting the form
        alert(dataPreview);
    }
};
</script>


<script>
// Defining a function to display error message
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

// Defining a function to validate form 
function validateForm4() {
    // Retrieving the values of form elements 
    var name4 = document.clientForm4.name4.value;
	var surname3 = document.clientForm4.surname3.value;
    var email3 = document.clientForm4.email3.value;
    var company_name2 = document.clientForm4.company_name2.value;

    
	// Defining error variables with a default value
    var name4Err = surname3Err = email3Err = company_nameErr = true;
    
    // Validate name
    if(name4 == "") {
        printError("name4Err", "Please enter your Name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(name4) === false) {
            printError("name4Err", "Please enter a valid Name");
        } else {
            printError("name4Err", "");
            name4Err = false;
        }
    }
	
	    // Validate surname3
    if(surname3 == "") {
        printError("surname3Err", "Please enter your Surname");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(surname3) === false) {
            printError("surname3Err", "Please enter a valid Surname");
        } else {
            printError("surname3Err", "");
            surname3Err = false;
        }
    }
	
	
    
    // Validate email3 address
    if(email3 == "") {
        printError("email3Err", "Please enter your email address");
    } else {
        // Regular expression for basic email3 validation
        var regex = /^\S+@\S+\.\S+$/;
        if(regex.test(email3) === false) {
            printError("email3Err", "Please enter a valid email address");
        } else{
            printError("email3Err", "");
            email3Err = false;
        }
    }
	
	
    // Validate company_name
    if(company_name2 == "") {
        printError("company_name2Err", "Please enter your company name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(company_name2) === false) {
            printError("company_name2Err", "Please enter a valid company name");
        } else {
            printError("company_name2Err", "");
            company_name2Err = false;
        }
    }	
	
	

    
    
    
    // Prevent the form from being submitted if there are any errors
    if((name4Err || surname3Err || email3Err || company_name2Err) == true) {
       return false;
    } else {
        // Creating a string from input data for preview
        var dataPreview = "You've entered the following details: \n" +
                          "Full Name: " + surname2 + " " + name3 + "\n" +
                          "Email Address: " + email2 + "\n"
						  "Company Name: " + company_name2 + "\n"
						  ;
      
        // Display input data in a dialog box before submitting the form
        alert(dataPreview);
    }
};
</script>


</head>



<style>

body{
	font-family:calibri;margin:0;
}

.table{
width:800px;border:collapse:collapse;
}

th{
border:1px solid #000;padding:6px;background:#ccc;
}

td{
border:1px solid #666;padding:6px;
}

.center{
text-align:center;
}

/* Style the button that is used to open and close the collapsible content */
.collapsible {
  background-color: #eee;
  color: #000;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: center;
  outline: none;
  font-size: 16px;
  width:800px;
  font-weight:600;
  
}

/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
.active, .collapsible:hover {
  background-color: #ddd;border-bottom:2px solid #222;color:green;
}

/* Style the collapsible content. Note: hidden by default */
.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
}

.form{
	padding:8px;margin-bottom:6px;width:99%;
}

.form_box{
	width:800px;margin:0 auto;
}

.submit{
	padding:8px;background:#ccc;color:red;border-radius:4px;border:1px solid #999;font-size:17px;letter-spacing:1.4px;cursor:pointer;
}

.submit:hover{
	padding:8px;background:#d90000;color:#fff;
}

.error{
	text-align:left;
}

p{
	padding:12px
}

.capitalise{
	text-transform:uppercase
}


</style>

<body>
<h2 align="center">1. Clients</h2>
<ul>
<li>Create an action that allows for the creation of a new client.</li>
<li>Display list of clients, ordered by Name ascending, with the following columns:
Name (left aligned)
Client code (left aligned)
No. of linked contacts (in integer format) (center aligned)
</li>
<li>If there are no clients to display, display the following text, without the aforementioned column headings:
No client(s) found.
</li>
</ul>

<br><br>
<table align="center" class="table" cellpadding="0" cellspacing="0">
<th>Client</th>
<th>Client Code</th>
<th>No. of linked contacts</th>
<tr>


<?php
include "db.php";

$sql = "SELECT * FROM clients order by name ASC";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
	echo '
	

<td>'.$row["name"].'</td>
<td class="capitalise">'.$row["client_code"].'</td>
<td class="center">'.$row["no_linked_contacts"].'</td><tr>


';
 
  }
} else {
  echo "<div align='center'>No client(s) found.</div>";
}

$conn->close();
?>

</table>

<div align="center" class="form_box">
<button type="button" class="collapsible">Add New Client</button>
<div class="content">
<h3>Fill in the form below</h3>
<form name="clientForm" onsubmit="return validateForm()" action="forms/clients.php" method="post">
<input class="form" type="text" name="name" placeholder="Enter Your Name" maxlength="255"><br>
<div class="error" id="nameErr"></div>
<input class="form" type="text" name="client_code" placeholder="Enter Client Code" maxlength="255"><br>
<div class="error" id="client_codeErr"></div>
<input class="form" type="text" name="no_linked_contacts" placeholder="No of Linked Contacts" maxlength="11"><br>
<div class="error" id="no_linked_contactsErr"></div>

<button class="submit" type="submit">Submit</button>
</form>
</div>
</div>



<script>

var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}

</script>


<h2 ALIGN="CENTER">2. Client Form</h2>

<p>Create an action that allows for the linking of contacts. Please note that one contact can be linked to multiple clients.<br>
Use tabs to segregate the different sections on the form.<br>
The following fields should exist, in tab, General:
</p>

<div align="center" class="form_box">
<form name="clientForm2" onsubmit="return validateForm2()" action="forms/client_form.php" method="post">
<input class="form" type="text" name="name2" placeholder="Enter Your Name" maxlength="255"><br>
<div class="error" id="name2Err"></div>
<input class="form" type="text" name="surname" placeholder="Enter Surname" maxlength="255"><br>
<div class="error" id="surnameErr"></div>
<input class="form" type="text" name="email" placeholder="Enter Email Address" maxlength="255"><br>
<div class="error" id="emailErr"></div>
<input class="form" type="text" name="company_name" class="capitalise" placeholder="Enter Company Name" maxlength="255"><br>
<div class="error" id="company_nameErr"></div>

<button class="submit" type="submit">Submit</button>
</form>
</div>

<br><br>
<table align="center" class="table" cellpadding="0" cellspacing="0">
<th>Full Name</th>
<th>Company Name</th>
<th>Client Code</th>
<th>Email Address</th>
<th>Delete</th>
<tr>

<?php
include "db.php";

$sql = "SELECT * FROM client_form order by full_name ASC";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
	echo '
	

<td>'.$row["full_name"].'</td>
<td>'.$row["company_name"].'</td>
<td class="capitalise center">'.$row["client_code"].'</td>
<td>'.$row["email"].'</td>
<td><a href="forms/delete.php?id='.$row["id"].'">Delete</a></td>
<tr>


';
 
  }
} else {
  echo "<div align='center'>No contacts found.</div>";
}

$conn->close();
?>

</table>


<br><br><br>

<h2 align="center">3. Contacts</h2>

<div align="center" class="form_box">
<h3>Add New Client</h3>
<form name="clientForm3" onsubmit="return validateForm3()" action="forms/contacts.php" method="post">
<input class="form" type="text" name="name3" placeholder="Enter Your Name" maxlength="255"><br>
<div class="error" id="name3Err"></div>
<input class="form" type="text" name="surname2" placeholder="Enter Surname" maxlength="255"><br>
<div class="error" id="surname2Err"></div>
<input class="form" type="text" name="email2" placeholder="Enter Email" maxlength="255"><br>
<div class="error" id="email2Err"></div>
<input class="form" type="text" name="no_linked_contacts2" placeholder="No of Linked Contacts" maxlength="11"><br>
<div class="error" id="no_linked_contacts2Err"></div>

<button class="submit" type="submit">Submit</button>
</form>
</div>


<br><br>
<table align="center" class="table" cellpadding="0" cellspacing="0">
<th>Full Name</th>
<th>Email Address</th>
<th>No. of Linked Contacts</th>
<tr>

<?php
include "db.php";

$sql = "SELECT * FROM contacts1 order by fullname ASC";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
	echo '
	

<td>'.$row["fullname"].'</td>
<td>'.$row["email"].'</td>
<td class="center">'.$row["no_linked_contacts"].'</td>

<tr>


';
 
  }
} else {
  echo "<div align='center'>No contact(s) found.</div>";
}

$conn->close();
?>

</table>

<br><br><br>

<h2 align="center">3.1 Enter unique email address</h2>

<div align="center" class="form_box">
<h3>Fill in Form</h3>
<form name="clientForm4" onsubmit="return validateForm4()" action="forms/contacts2.php" method="post">
<input class="form" type="text" name="name4" placeholder="Enter Your Name" maxlength="255"><br>
<div class="error" id="name4Err"></div>
<input class="form" type="text" name="surname3" placeholder="Enter Surname" maxlength="255"><br>
<div class="error" id="surname3Err"></div>
<input class="form" type="text" name="email3" placeholder="Enter Email" maxlength="255"><br>
<div class="error" id="email3Err"></div>
<input class="form" type="text" name="company_name2" placeholder="Enter Company Name" maxlength="255"><br>
<div class="error" id="company_name2Err"></div>

<button class="submit" type="submit">Submit</button>
</form>

<br><br>
<table align="center" class="table" cellpadding="0" cellspacing="0">
<th>Full Name</th>
<th>Company Name</th>
<th>Client Code</th>
<th>Email Address</th>
<th>Delete</th>
<tr>

<?php
include "db.php";

$sql = "SELECT * FROM contacts2 order by fullname ASC";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
	echo '
	

<td>'.$row["fullname"].'</td>
<td>'.$row["company_name"].'</td>
<td class="capitalise">'.$row["client_code"].'</td>
<td>'.$row["email"].'</td>
<td><a href="forms/delete2.php?id='.$row["id"].'">Delete</a></td>
<tr>


';
 
  }
} else {
  echo "<div align='center'>No contacts found.</div>";
}

$conn->close();
?>

</table>

<br><br><br><br>

</body>
</html>