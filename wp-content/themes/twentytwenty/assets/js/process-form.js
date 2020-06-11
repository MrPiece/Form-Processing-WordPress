$(document).ready(function($) {
  const form = $('#my-custom-form');
  const formAction = form.attr('action');

  form.on('submit', () => {
    const formData = {
      'full-name': $('#full-name'),
      'email': $('#email'),
      'password': $('#password'),
      'date': $('#date'),
      'time': $('#time')
    };

    const successMessage = `
      <p class="has-text-color has-background has-background-color has-accent-background-color" style="margin: auto">
        Your appointment is stored, our moderators will send you an email for details soon.
      </p>
    `;

    $.ajax({
      url: formAction,
      type: 'POST',
      data: formData
    });
  });
})