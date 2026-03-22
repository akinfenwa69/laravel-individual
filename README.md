# README.md

## Què és?

Aquest projecte és una plataforma de **Pokémon competitiu**, on es poden crear criatures i equips. No hi haurà lluites, però hi ha lliberat creativa. Per poder provar totes les funcions l'usuari s'ha de registar.

## Quin és l'objectiu?

L'objectiu d'aquest projecte és aprendre pel meu compte com funciona tot. A part del projecte grupal, també s'ha de realitzar l'individual (voluntari) per experimentar amb un tema d'interés per l'alumne.

---

## Passos per aixecar l'entorn

Comandes bàsiques si es comença des de zero:

| Comanda                                                                               | Què fa?                                                                |
| ------------------------------------------------------------------------------------- | ---------------------------------------------------------------------- |
| `apt install make`                                | Instal·la `make`                                       |
| `snap install docker`                                | Instal·la `docker`                                       |


Segueix els següents passos per fer funcionar el projecte:

| Comanda                                                                               | Què fa?                                                                |
| ------------------------------------------------------------------------------------- | ---------------------------------------------------------------------- |
| `git clone https://github.com/akinfenwa69/laravel-individual.git`                                | Clona repository a màquina local                                       |
| `make composer cmd=”install”`                                                         | Instal·la dependències del Composer                                    |
| Copiar `.env.example`, canviar nom a `.env` i editar                                  | Configuració al punt següent                                     |
| `make up`                                                                             | Posa en marxa dockers                                                  |
| `make art cmd=”key:generate”`                                                         | Genera clau del `.env`                                                 |
| `make npm-install`                                                                    | Instal·la                                                              |
| `make npm-build`                                                                      | Construeix                                                             |
| `make art cmd=”migrate --seed”` o `make art cmd=”migrate:fresh --seed”` (DB existent) | Genera les taules del projecte a la db noves i afegeix dades d'exemple |
| `make fix-perms`                                                                      | Dóna privilegis                                                        |

### Configuració MySQL

```
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=projecte
DB_USERNAME=user
DB_PASSWORD=secret

SESSION_DRIVER=file
```

### Execució de migracions

Per obtenir les taules, hauràs d'executar la següent comanda a l'arrel del projecte:
```bash
make art cmd="migrate --seed"
```
O
```bash
make art cmd="migrate:fresh --seed"
```
> Aquesta última crea les taules de nou i genera dades d'exemple

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