describe('test loginn', () => {
    Cypress.on('uncaught:exception', (err, runnable) => {
        // returning false here prevents Cypress from
        // failing the test
        return false
    })
    it('go to login page', () => {
        cy.visit('http://localhost/nmm/public/shop/login');
    })
    it('test the login function', () => {
        cy.get('#email')
            .type('abc')
        cy.get('#password')
            .type('xyz')
        cy.get('#submit').click()
    })
  })