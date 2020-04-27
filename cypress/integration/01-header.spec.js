describe('test header', () => {
    Cypress.on('uncaught:exception', (err, runnable) => {
        // returning false here prevents Cypress from
        // failing the test
        return false
    })
    it('go to homepage', () => {
        cy.visit('http://localhost/nmm/public/shop/homepage');
    })
    it('test the header', () => {
      cy.contains('Home').click()
      cy.contains('Danh mục').click()
      cy.contains('Liên hệ').click()
    })
  })