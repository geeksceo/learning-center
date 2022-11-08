const form = document.getElementById("form");
const firstname = document.getElementById("firstname");
const lastname = document.getElementById("lastname");
const email = document.getElementById("email");
const level = document.getElementById("level");

form.addEventListener("submit", (e) => {
  e.preventDefault();

  checkInputs();
});

function checkInputs() {
  // get the values from the inputs
  const firstnameValue = firstname.value.trim();
  const lastnameValue = lastname.value.trim();
  const emailValue = email.value.trim();
  const levelValue = level.value.trim();
  console.log(
    `${firstnameValue} ${lastnameValue} ${emailValue} ${levelValue}`
    )

    if (firstnameValue === "") {
      setErrorFor(firstname, "Le prénom ne peut pas être vide.");
    } else {
      setSuccessFor(firstname);
    }

    if (lastnameValue === "") {
      setErrorFor(lastname, "Le nom ne peut pas être vide");
    } else {
      setSuccessFor(lastname);
    }

	if (emailValue === "") {
		setErrorFor(email, "L'email ne peut pas être vide");
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, "E-mail invalide");
	} else {
		setSuccessFor(email);
	}

	if (levelValue == 0) {
		setErrorFor(level, "Choisissez un niveau");
	} else {
		setSuccessFor(level);
	}

  // show a success message

	let formData = new FormData()
	let data = []
	const host = get_hostname($(location).attr('href')); // Domain name

	data.push({
		firstname: firstnameValue,
		lastname: lastnameValue,
		email: emailValue,
		level: levelValue
    })

    if(data.length != 0) {
        formData.append('data', JSON.stringify(data))
        fetch(`${host}/api/register/member`, {
            method: 'POST',
            credentials: 'includes',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('#form input[name="_token"]').value
            },
            body: formData// body data type must match "Content-Type" header
        })
        .then( response => response.json())
        .then(data => console.log(data))
    }

}

function get_hostname(url) {
	var m = url.match(/^http:\/\/[^/]+/);
	var ms = url.match(/^https:\/\/[^/]+/);

	if(m) {
		return m[0]
	} else if(ms) {
		return ms[0]
	} else {
		return null;
	}
}

function setErrorFor(input, message) {
  const formControl = input.parentElement; //form-control
  const small = formControl.querySelector("small");

  // add error message inside small
  small.innerText = message;

  // add error classs
  formControl.className = "form-control error";
}

function setSuccessFor(input) {
  const formControl = input.parentElement; //form-control
  formControl.className = "form-control success";
}

function isEmail(email) {
  return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
    email
  );
}
