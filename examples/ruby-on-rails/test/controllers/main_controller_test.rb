def test_the_truth
  article = Article.new
  assert_not article.save
end
