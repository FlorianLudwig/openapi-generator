=begin
#OpenAPI Petstore

#This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\

The version of the OpenAPI document: 1.0.0

Generated by: https://openapi-generator.tech
OpenAPI Generator version: 4.2.2-SNAPSHOT

=end

require 'spec_helper'
require 'json'
require 'date'

# Unit tests for Petstore::BigCatAllOf
# Automatically generated by openapi-generator (https://openapi-generator.tech)
# Please update as you see appropriate
describe 'BigCatAllOf' do
  before do
    # run before each test
    @instance = Petstore::BigCatAllOf.new
  end

  after do
    # run after each test
  end

  describe 'test an instance of BigCatAllOf' do
    it 'should create an instance of BigCatAllOf' do
      expect(@instance).to be_instance_of(Petstore::BigCatAllOf)
    end
  end
  describe 'test attribute "kind"' do
    it 'should work' do
      # assertion here. ref: https://www.relishapp.com/rspec/rspec-expectations/docs/built-in-matchers
      # validator = Petstore::EnumTest::EnumAttributeValidator.new('String', ["lions", "tigers", "leopards", "jaguars"])
      # validator.allowable_values.each do |value|
      #   expect { @instance.kind = value }.not_to raise_error
      # end
    end
  end

end