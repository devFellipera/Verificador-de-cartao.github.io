document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('card-form');
    const responseDiv = document.getElementById('response');

    form.addEventListener('submit', async function(event) {
        event.preventDefault(); // Impede o envio do formulário padrão

        const formData = new FormData(form);
        const response = await fetch('process.php', {
            method: 'POST',
            body: formData
        });

        const result = await response.json();

        if (result.success) {
            responseDiv.textContent = 'Dados cadastrados com sucesso!';
            responseDiv.style.color = 'green';
        } else {
            responseDiv.textContent = 'Erro ao cadastrar os dados!';
            responseDiv.style.color = 'red';
        }
    });
});
