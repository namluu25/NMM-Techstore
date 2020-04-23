describe('Dropdown menu on category test', () => {
    Cypress.on('uncaught:exception', (err, runnable) => {
        // returning false here prevents Cypress from
        // failing the test
        return false
    })
    beforeEach(() => {
        cy.visit('http://localhost:8080/nmm/public/shop/homepage')
        cy.get('#navbarSupportedContent').contains('Danh mục')
            .trigger('mouseover')    
            .click()
    })
    it('check if dropdown working correctly', () => {
            cy.get('#dropdown').contains('Theo loại')
                .invoke('show')
                .click({force: true})
               
            cy.go('back')
            cy.get('#dropdown').contains('Theo hãng')
                .invoke('show')
                .click({force: true})
          
    })
})