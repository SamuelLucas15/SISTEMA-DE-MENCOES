function calcularMencao(event) {
    event.preventDefault(); // Impede o envio do formulário

    const av1 = parseInt(document.getElementById("av1").value);
    const av2 = parseInt(document.getElementById("av2").value);
    const noa = parseInt(document.getElementById("noa").value);
    const mencaoResultado = document.getElementById("ResultadoMencao");
    const posNoaResultado = document.getElementById("ResultadoPosNoa");

    // Primeiro, calcula a menção do trimestre com AV1 e AV2
    let mencao = "";
    if ((av1 === 1 && av2 === 1) || (av1 === 1 && av2 === 2) || (av1 === 2 && av2 === 1)) {
        mencao = "D"; // Menção "D" para aprovação
    } else {
        mencao = "ND"; // Caso contrário, a menção será "ND" (não passou)
    }
    mencaoResultado.value = mencao;

    // Se o NOA for inserido, recalcula a menção pós-NOA
    if (noa !== 0) {
        let notas = [av1, av2];

        // Substitui qualquer PA ou NA pelo NOA, se houver
        if (notas[0] === 2 || notas[0] === 3) {
            notas[0] = noa;
        }
        if (notas[1] === 2 || notas[1] === 3) {
            notas[1] = noa;
        }

        // Verifica se ambas as notas são "NA", caso em que não passa
        if (notas[0] === 3 && notas[1] === 3) {
            posNoaResultado.value = "ND"; // Não passa se tiver NA + NA
        } else {
            // Verifica as combinações para menção pós-NOA
            let posNoa = "";
            if ((notas[0] === 1 && notas[1] === 1) ||
                (notas[0] === 1 && notas[1] === 2) ||
                (notas[0] === 2 && notas[1] === 1)) {
                posNoa = "D"; // Aprovação
            } else {
                posNoa = "ND"; // Não aprovado
            }

            posNoaResultado.value = posNoa;
        }
    } else {
        posNoaResultado.value = ""; // Caso o NOA não seja inserido, limpa o campo pós-NOA
    }
}