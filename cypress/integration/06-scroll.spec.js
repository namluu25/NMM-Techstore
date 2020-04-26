describe('check if index page can scroll', () => {
    Cypress.on('uncaught:exception', (err, runnable) => {
        // returning false here prevents Cypress from
        // failing the test
        return false
    })

    it ('go to home page', () =>{
        cy.visit('http://localhost:8080/nmm/public/shop/homepage');
    })

    it ('test scroll function', () => {
        cy.scrollTo('bottom', { duration: 2000 })
        cy.scrollTo('top', { duration: 2000 })

    })
})