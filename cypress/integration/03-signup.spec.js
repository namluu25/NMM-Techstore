describe('test register', () => {
    Cypress.on('uncaught:exception', (err, runnable) => {
        // returning false here prevents Cypress from
        // failing the test
        return false
    })
    it('go to register page', () => {
        cy.visit('http://localhost/nmm/public/shop/registration');
    })
    it('test the register function', () => {
        cy.get('#name')
            .type('abc')

        cy.get('#username')
            .type('xyz')

        cy.get('#email')
            .type('xyz@gmail.com')

        cy.get('#address')
            .type('xyz')

        cy.get('#phone')
            .type('0912345678')

        cy.get('#password')
            .type('xyz')

        cy.get('#pass')
            .type('xyz')
            
        cy.get('#submit').click()
    })
  })