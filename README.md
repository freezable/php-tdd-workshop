# PRACTICAL TDD WORKSHOP: EMBRACING COLLABORATIVE LEARNING THROUGH PAIR PROGRAMMING

This is a scaffolding kata setup to practice TDD in PHP.

- Working example in the `src` and `tests` folder.
- PHPUnit installed.
  - `composer test`

### Setup

You can either install the dependencies locally or use the provided docker container:

```bash
docker-compose up -d
docker exec -ti -u dev php_tdd_workshop bash
composer install
composer test
```

---

<div align="center">
    <h3>Test-Driven Development</h3>
    <img alt="TDD" src="img/tdd.png"><br>
</div>

<div align="center">
    <h3>The 3-repetition rule on TDD - Triangulation</h3>
    <img alt="Triangulation" src="img/triangulation.png"><br>
</div>

<div align="center">
  <h3>Example mapping</h3>
  <img alt="Example Mapping" src="img/mapping.png"><br>
</div>

<div align="center">
  <h3>Test Desiderata</h3>
  <img alt="Example Mapping" src="img/desiderata.png"><br>
</div>

---

## Katas

### 1. [Rock paper scissors](https://hackmd.io/@evalverde/ipc-remote-kata-1)

- TDD Cycle
- Baby steps
- Triangulation

### 2. [Password validator kata](https://www.codurance.com/katas/password-validation)

- Example Mapping
- TDD Cycle
- Baby steps
- Triangulation
- Test desiderata

### 3. [Guess the random number](https://www.codurance.com/katas/random-number-kata)

- CRC cards
- Mock it if you own it
- Collaborators
- Solitary or Sociable test
- Triangulation
- Test desiderata

### 4. [Morning Routine](https://www.codurance.com/katas/morning-routine-kata)

- CRC cards
- Mock it if you own it
- Collaborators
- Triangulation
- Test desiderata

---

[Presentation Slides](https://docs.google.com/presentation/d/12n-19JnC1J_MNI6lvYO9QDmdkrlEEQ6tiJImAfF9tAo/view)
