const contactFormSubmit = document.getElementById('contact-form-submit');
contactFormSubmit.addEventListener('click', validateForm);

function validateForm(event) {

  event.preventDefault();
  event.stopPropagation();

  const firma = document.getElementById('firma') !== null ? document.getElementById('firma').value : '';
  const nachname = document.getElementById('nachname') !== null ? document.getElementById('nachname').value : '';
  const email = document.getElementById('email') !== null ? document.getElementById('email').value : '';   
  const vorname = document.getElementById('vorname') !== null ? document.getElementById('vorname').value : '';
  const telefon = document.getElementById('telefon') !== null ? document.getElementById('telefon').value : '';
  const produktbeschreibung = document.getElementById('produktbeschreibung') !== null ? document.getElementById('produktbeschreibung').value : '';


  //Provera da li su uneti svi podaci, ukoliko nisu u listu se dodaje poruka upozorenja
  const validationMessages = [];
 
  if (firma.length === 0) {validationMessages.push('Please enter a valid company name.'); }
  if (nachname.length === 0) {validationMessages.push('Please enter a valid name.'); }
  if (email.length === 0 || !emailIsValid(email)) {validationMessages.push('Please enter a valid email address.'); }
  if (vorname.length === 0) {validationMessages.push('Please enter a valid last name.'); }
  if (telefon.length === 0) {validationMessages.push('Please enter a valid phone number.'); }
  if (produktbeschreibung.length === 0) {validationMessages.push('Please enter a valid message.'); }


  //Proverava se da li postoje greske , odnosno poruke upozorenja
  //Ukoliko ne postoje, forma se submituje ; Ukoliko postoje, poruke se ispisuju na DOM-U
  if (validationMessages.length === 0) {
    document.getElementById('contact-form').submit();
  } else {
    //Poruke koje se ispisuju na DOM-U
    const parent = document.getElementById('validation-messages-container');
    while (parent.firstChild) {
      parent.removeChild(parent.firstChild);
    }
    
    //Kreiranje novog diva sa klasom "validation-message" unutar koga ce biti poruka upozorenja
    validationMessages.forEach((validationMessage)=> {
        const divElement = document.createElement('div');
        divElement.classList.add('validation-message');

        const node = document.createTextNode(validationMessage);
        divElement.appendChild(node);
  
        const element = document.getElementById('validation-messages-container');
        element.appendChild(divElement);
  
      });
  }
}

//Funkcija za validaciju emaila pomocu regularnih ekspresija
const emailIsValid = (email) => {
    const pattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return pattern.test(email.toLowerCase());
}