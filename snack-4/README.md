# Snack 4 - Classi e Studenti

## Descrizione
Questo progetto PHP visualizza un elenco di classi e studenti con diverse funzionalità di filtraggio e visualizzazione. Utilizza Bootstrap per lo stile e il layout e include immagini generate automaticamente per ogni studente.

### Features principali:
1. **Visualizzazione delle classi e degli studenti**: 
   - Vengono visualizzati il nome, il cognome, l'età, il voto medio e il linguaggio preferito di ciascun studente.
   - Le informazioni sono organizzate in card.

2. **Filtraggio per voto medio massimo**:
   - È possibile inserire un voto medio massimo tramite un form, e verranno mostrati solo gli studenti con un voto medio inferiore a quello specificato.

3. **Filtraggio per linguaggio di programmazione preferito**:
   - Inserendo un linguaggio di programmazione, verranno mostrati solo gli studenti che hanno indicato quel linguaggio come preferito.

4. **Immagini automatiche per ogni studente**:
   - Ogni studente ha un'immagine generata dinamicamente utilizzando **RoboHash** in base al nome.

5. **Effetto hover** sulle card:
   - Le card degli studenti hanno un effetto di hover che le rende interattive.

6. **Codice commentato per verifica milestone 4B**:
   - Il codice della milestone 4B, che filtra gli studenti con voto medio sufficiente, è presente ma commentato per facilitare la verifica, e leggermente modificato dalla milestone stessa, per adattamento.

---

## Struttura del progetto

Il progetto include i seguenti file principali:
- `index.php`: Il file principale che contiene la logica e la visualizzazione dell'applicazione.
- `classes.php`: File che contiene l'array associativo di classi e studenti.
- `style.css`: File di stile personalizzato per le animazioni e l'aspetto delle card.

---

## Milestones

### **Snack 4A - Visualizzazione di Classi e Studenti**

Viene visualizzato un elenco di classi, e per ciascuna classe vengono mostrati gli studenti. Ogni studente ha le seguenti informazioni:
- Nome e cognome
- Età
- Voto medio
- Linguaggio preferito

### **Snack 4B - Filtraggio per voto medio sufficiente**

Il codice filtra gli studenti con un voto medio maggiore o uguale a 6. Questo filtro è stato implementato e commentato per la verifica.

### **Snack 4C - Filtraggio dinamico per voto medio massimo**

Aggiunto un form che permette di inserire un **voto medio massimo**. Gli studenti con voto medio superiore non verranno visualizzati.

### **Snack 4D - Filtraggio per linguaggio preferito**

Aggiunto un secondo campo nel form per filtrare gli studenti in base al **linguaggio preferito**. Solo gli studenti con il linguaggio specificato verranno visualizzati.

### **Bonus - Aggiunta immagini per ogni studente**

Le card di ogni studente ora mostrano un'immagine generata dinamicamente utilizzando il servizio **RoboHash**, in quanto i link assegnati nell'array non sono funzionanti.

---

## Come eseguire il progetto

1. Clonare il repository o scaricare i file.
2. Assicurarsi di avere un server locale come **MAMP**.
3. Posizionare il progetto nella cartella **htdocs**.
4. Aprire il browser e accedere a `localhost/nome-cartella-progetto/index.php`.

---

## Dipendenze
- **PHP**: Versione = 8.0
- **Bootstrap**: Versione 5.3.3 per lo stile e la struttura.
- **RoboHash**: Servizio esterno per generare immagini.

---

## Contatti
Se hai domande o suggerimenti, puoi contattarmi a: [francescomatteucci31@gmail.com](mailto:francescomatteucci31@gmail.com)
