const form = document.getElementById('calcul');
const errorZone = document.getElementById('errorZone');
const historyList = document.getElementById('historyList');

form.addEventListener('submit', (e) => {
    e.preventDefault();
    errorZone.textContent = "";
    const a=parseFloat(document.getElementById('numA').value);
    const b= parseFloat(document.getElementById('numB').value);
    const operation= document.getElementById('operator').value;

    // Validation
    if (isNaN(a) || isNaN(b)) {
        errorZone.textContent = "Veuillez saisir deux nombres valides.";
        return;
    }

    if (operation === "/" && b === 0) {
        errorZone.textContent = "Erreur : Division par zéro impossible !";
        return;
    }

    // Calcul
    let resultat;
    switch (operation) {
        case "+": resultat = a + b; break;
        case "-": resultat = a - b; break;
        case "*": resultat = a * b; break;
        case "/": resultat = a / b; break;
    }

    // Ajout à l'historique
    const ligne = `${a} ${operation} ${b} = <strong>${resultat}</strong>`;
    const li = document.createElement('li');
    li.innerHTML = ligne;
    
    // Insérer au début de la liste
    historyList.prepend(li);

    // Vider les champs
    form.reset();
});