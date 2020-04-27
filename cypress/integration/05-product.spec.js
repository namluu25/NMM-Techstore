describe('check if products show up perfectly', () => {
    Cypress.on('uncaught:exception', (err, runnable) => {
        // returning false here prevents Cypress from
        // failing the test
        return false
    })

    it ('go to home page', () =>{
        cy.visit('http://localhost/nmm/public/shop/homepage');
    })

    it ('check product view', () => {
        cy.get('#newproduct').scrollIntoView({ duration: 2000 })
            .trigger('mouseover')  
            .click()
    })
})