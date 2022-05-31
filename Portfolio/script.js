function change(id,idcontent){
    document.querySelector('#onglet-exp-01').classList.remove('onglet-actif');
    document.querySelector('#onglet-exp-02').classList.remove('onglet-actif');
    document.querySelector('#onglet-exp-03').classList.remove('onglet-actif');
    document.querySelector('#onglet-exp-04').classList.remove('onglet-actif');
    document.getElementById(id).classList.add('onglet-actif');
    document.querySelector('#exp-01').style.display='none';
    document.querySelector('#exp-02').style.display='none';
    document.querySelector('#exp-03').style.display='none';
    document.querySelector('#exp-04').style.display='none';
    document.getElementById(idcontent).style.display='flex';
}