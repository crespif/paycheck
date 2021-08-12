"use strict";

document.addEventListener("DOMContentLoaded", ()=>{
    const $btn = document.querySelector("#btn-download");
    $btn.addEventListener("click",()=>{
        const $elementoParaConvertir = document.querySelector("#recibo"); // <-- Aquí puedes elegir cualquier elemento del DOM
        html2pdf()
            .set({
                margin: 1,
                filename: 'Recibo.pdf',
                image: {
                    type: 'jpeg',
                    quality: 0.98
                },
                html2canvas: {
                    scale: 3, // A mayor escala, mejores gráficos, pero más peso
                    letterRendering: true,
                },
                jsPDF: {
                    unit: "in",
                    format: "a3",
                    orientation: 'portrait' // landscape o portrait
                }
            })
        .from($elementoParaConvertir)
        .save()
        .catch(err => console.log(err));
    });

    const $btnMyPass = document.querySelector("#btnMyPass");
    const $recibo = document.querySelector("#recibo");
    $btnMyPass.addEventListener("click", (e)=>{
        e.preventDefault();
        showEditMyPass();
    });

    async function showEditMyPass(){
        let r = await fetch(`showEditMyPass`);
        let html = await r.text();
        $recibo.innerHTML += html;
    }
})