<!-- Add Quiz Modal -->
<div class="modal fade mt-5" id="addQuestionModal" tabindex="-1" aria-labelledby="addQuiz" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addQuestion">Add Question</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="./endpoint/add-question.php" method="POST">
                    <div class="form-group">
                        <label for="quizQuestion">Question</label>
                        <input type="text" class="form-control" id="quizQuestion" name="quiz_question">
                    </div>
                    <div class="form-group">
                        <label for="optionA">Option A</label>
                        <input type="text" class="form-control" id="optionA" name="option_a">
                    </div>
                    <div class="form-group">
                        <label for="optionB">Option B</label>
                        <input type="text" class="form-control" id="optionB" name="option_b">
                    </div>
                    <div class="form-group">
                        <label for="optionC">Option C</label>
                        <input type="text" class="form-control" id="optionC" name="option_c">
                    </div>
                    <div class="form-group">
                        <label for="optionD">Option D</label>
                        <input type="text" class="form-control" id="optionD" name="option_d">
                    </div>
                    <div class="form-group">
                        <label for="correctAnswer">Correct Answer (Letter Only)</label>
                        <input type="text" class="form-control" id="correctAnswer" name="correct_answer">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-dark">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Update Quiz Modal -->
<div class="modal fade mt-5" id="updateQuestionModal" tabindex="-1" aria-labelledby="addQuiz" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Question</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="./endpoint/update-question.php" method="POST">
                    <div class="form-group" hidden>
                        <label for="updateQuizID">Question ID</label>
                        <input type="text" class="form-control" id="updateQuizID" name="tbl_quiz_id">
                    </div>
                    <div class="form-group">
                        <label for="updateQuestion">Question</label>
                        <input type="text" class="form-control" id="updateQuestion" name="quiz_question">
                    </div>
                    <div class="form-group">
                        <label for="updateOptionA">Option A</label>
                        <input type="text" class="form-control" id="updateOptionA" name="option_a">
                    </div>
                    <div class="form-group">
                        <label for="updateOptionB">Option B</label>
                        <input type="text" class="form-control" id="updateOptionB" name="option_b">
                    </div>
                    <div class="form-group">
                        <label for="updateOptionC">Option C</label>
                        <input type="text" class="form-control" id="updateOptionC" name="option_c">
                    </div>
                    <div class="form-group">
                        <label for="updateOptionD">Option D</label>
                        <input type="text" class="form-control" id="updateOptionD" name="option_d">
                    </div>
                    <div class="form-group">
                        <label for="correctAnswer">Correct Answer (Letter Only)</label>
                        <input type="text" class="form-control" id="updateCorrectAnswer" name="correct_answer">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-dark">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Result Modal -->
<div class="modal fade mt-5" id="resultModal" tabindex="-1" aria-labelledby="addQuiz" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="result">Result</h5>
            </div>
            <div class="modal-body">
                <form action="./endpoint/add-result.php" method="POST">
                    <div class="form-group">
                        <label for="quizTaker">Student Fullname</label>
                        <input type="text" class="form-control" id="quizTaker" name="quiz_taker">
                    </div>
                    <div class="form-group">
                        <label for="yearSection">Year and Section</label>
                        <input type="text" class="form-control" id="yearSection" name="year_section">
                    </div>
                    <div class="form-group">
                        <label for="totalScore">Total Score</label>
                        <input type="text" class="form-control" id="totalScore" name="total_score" readonly>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
