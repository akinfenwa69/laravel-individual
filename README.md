# README.md

## Què és?

Aquest projecte és una plataforma de **Pokémon competitiu**, on es poden crear criatures i equips. No hi haurà lluites, però hi ha lliberat creativa. Per poder provar totes les funcions l'usuari s'ha de registar.

## Quin és l'objectiu?

L'objectiu d'aquest projecte és aprendre pel meu compte com funciona tot. A part del projecte grupal, també s'ha de realitzar l'individual (voluntari) per experimentar amb un tema d'interés per l'alumne.

---

## Clonar repositori

Per clonar el repositori, segueix els següents passos:

1. Situat a la carpeta on vols guardar el projecte i executa la següent comanda:
   ```bash
   git clone https://github.com/akinfenwa69/laravel-individual.git
   ```
2. ...
3. ...

---

## Relacions

| Relació                    | Motiu                                                                                                            |
| -------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| Pokémon N &mdash; M Team   | Un equip pot tindre fins a 6 Pokémons (`limit(6)`), i les criatures que el componen, poden estar a altres equips |
| Player 1 &mdash; N Team    | Un jugador pot tenir molts equips, però un equip només pot ser d'un jugador                                      |
| Player 1 &mdash; 1 Country | Un jugador pot representar a un país, i un país pot ser representat només per un jugador                         |

## Autenticació

Inclou dos rols:

- **user**. Pot crear Pokémons i equips, i pot veure els representants de cada país.
- **admin**. Administra els jugadors i països, a part dels Pokémons i equips.

> També està l'usuari sense rol, que podrà veure els Pokémons, representants i una guia bàsica de la plataforma.

---

## Canvis d'estructura

- Implementar autenticació (Laravel Breeze)
- S'ha separat les claus foranes a `migrations` per implementarles a part de la taula base.
- Modificar 

---

## Criteris de Qualificació

- [ ] Qualitat del codi
  - [ ] Claredat
  - [ ] Estructuració
  - [ ] Bones pràctiques
  - [ ] Llegibilitat
- [ ] Compleció dels requeriments técnics
- [ ] Maneig d'errors i seguretat
  - [ ] Validar dades
  - [ ] Tractament d'errors
  - [ ] Mesures mínimes de seguretat
- [ ] Ús adequat de tecnologies
- [ ] Documentació mínima del codi
  - [ ] Comentaris
  - [ ] `README.md`
  - [ ] Instruccions bàsiques per entendre el projecte
